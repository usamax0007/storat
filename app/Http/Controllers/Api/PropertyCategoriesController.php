<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\PropertyCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PropertyCategoriesController extends Controller
{
    public function index(): JsonResponse|AnonymousResourceCollection
    {
        $categories = PropertyCategory::select('id', 'name_en', 'name_ar')->get();
        if ($categories->isEmpty()) {
            return response()->json([
                'message' => 'No properties found',
            ]);
        }

        return CategoryResource::collection($categories);
    }
}
