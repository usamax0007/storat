<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertiesRequest;
use App\Http\Requests\PropertyRequest;
use App\Http\Resources\PropertyResource;
use App\Models\LastVisitedProperty;
use App\Models\Property;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PropertyController extends Controller
{
    public function index(PropertiesRequest $request): JsonResponse|AnonymousResourceCollection
    {
        $query = Property::query()->with(['category:id,name_en,name_ar', 'plan']);

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        if ($request->filled('sub_category_id')) {
            $query->where('sub_category_id', $request->sub_category_id);
        }
        if ($request->filled('purpose_type')) {
            $query->where('purpose_type', $request->purpose_type);
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $properties = $query->orderBy('top_advertisement_no_of_days', 'desc')->get();

        if ($properties->isEmpty()) {
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
        $property->load(['category:id,name_en,name_ar', 'plan']);

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

    public function store(PropertyRequest $request): JsonResponse
    {
        $images = [];
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            if (!is_array($files)) {
                $files = [$files];
            }
            foreach ($files as $image) {
                $images[] = $image->store('properties/images', 'public');
            }
        }

        $floorPlans = [];
        if ($request->hasFile('floor_plans')) {
            $files = $request->file('floor_plans');
            if (!is_array($files)) {
                $files = [$files];
            }
            foreach ($files as $plan) {
                $floorPlans[] = $plan->store('properties/floor_plans', 'public');
            }
        }

        $videoPath = null;
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('properties/videos', 'public');
        }

        $property = Property::create(array_merge(
            $request->validated(),
            [
                'images'      => $images,
                'floor_plans' => $floorPlans,
                'video'       => $videoPath,
                'user_id'     => auth()->id(),
            ]
        ));

        $property->load(['category:id,name_en,name_ar', 'plan']);

        return response()->json([
            'message'  => 'Property created',
            'property' => new PropertyResource($property),
        ]);
    }

    public function postedProperties(): AnonymousResourceCollection
    {
        $user_id = auth()->id();

        $properties = Property::where('user_id', $user_id)
            ->with(['category:id,name_en,name_ar', 'plan'])
            ->get();

        return PropertyResource::collection($properties);
    }


}
