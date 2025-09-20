<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TermsConditionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'description_en' => $this->terms_conditions['en'] ?? null,
            'description_ar' => $this->terms_conditions['ar'] ?? null,
        ];
    }
}
