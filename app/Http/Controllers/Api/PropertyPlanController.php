<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\PlanResource;
use App\Models\PropertyPlan;
use Illuminate\Http\Request;

class PropertyPlanController extends Controller
{
    public function index()
    {
        $plans = PropertyPlan::all();

        return PlanResource::collection($plans);
    }
}
