<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavoritePropertyRequest;
use App\Http\Resources\PropertyResource;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FavoriteController extends Controller
{
    public function index(): JsonResponse|AnonymousResourceCollection
    {
        $auth_id = auth()->id();
        $favorites = User::findOrFail($auth_id)->favorites()->with('favoriteBy')->get();
        if ($favorites->isEmpty()) {
            return response()->json([
                'message' => 'No favorites Property Available',
            ]);
        }
        return PropertyResource::collection($favorites);
    }

    public function store(FavoritePropertyRequest $request): JsonResponse
    {
        $user = auth()->user();
        $propertyId = $request->property_id;
        $property = Property::findOrFail($propertyId);
        $user->favorites()->syncWithoutDetaching([$property->id]);

        return response()->json([
            'message' => 'Property added to favorites',
        ]);
    }
    public function remove(FavoritePropertyRequest $request): JsonResponse
    {
        $user = auth()->user();
        $propertyId = $request->property_id;
        $exists = $user->favorites()->where('property_id', $propertyId)->exists();

        if (! $exists) {
            return response()->json([
                'message' => 'This property is not in your favorites.'
            ], 404);
        }
        $user->favorites()->detach($propertyId);

        return response()->json([
            'message' => 'Property removed from favorites',
        ]);
    }

}
