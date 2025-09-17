<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Models\LastVisitedProperty;
use App\Models\Property;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PropertyController extends Controller
{
    public function index(): JsonResponse|AnonymousResourceCollection
    {
        $properties = Property::all();

        if($properties->isEmpty()){
            return response()->json([
                'message' => 'No properties found',
            ], 404);
        }
        return PropertyResource::collection($properties);
    }

    public function show($id): PropertyResource|JsonResponse
    {
        $property = Property::find($id);

        if (!$property) {
            return response()->json([
                'message' => 'Property not found',
            ], 404);
        }

        if (auth()->check()) {
            LastVisitedProperty::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'property_id' => $property->id,
                ],
                [
                    'updated_at' => now(),
                ]
            );
        }
        return new PropertyResource($property);
    }

    public function lastVisited(): JsonResponse|AnonymousResourceCollection
    {
        $user_id = auth()->id();
        $propertyIds = LastVisitedProperty::where('user_id', $user_id)
            ->pluck('property_id');

        if ($propertyIds->isEmpty()) {
            return response()->json([
                'message' => 'No properties found',
            ]);
        }
        $properties = Property::whereIn('id', $propertyIds)->get();

        return PropertyResource::collection($properties);
    }

}
