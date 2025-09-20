<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'name_en'       => $this->name_en,
            'name_ar'       => $this->name_ar,
            'price'         => $this->price,
            'description_en'=> collect($this->description)->pluck('en')->filter()->values(),
            'description_ar'=> collect($this->description)->pluck('ar')->filter()->values(),
        ];
    }
}
