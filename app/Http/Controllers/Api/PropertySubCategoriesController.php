<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use App\Models\PropertySubCategory;
use Illuminate\Http\Request;

class PropertySubCategoriesController extends Controller
{
    public function index(SubCategoryRequest $request)
    {
        $subCategories = PropertySubCategory::where('property_category_id', $request->property_categories_id)
            ->get();
        return SubCategoryResource::collection($subCategories);
    }
}
