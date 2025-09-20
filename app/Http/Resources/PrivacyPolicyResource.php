<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PrivacyPolicyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'description_en' => $this->privacy_policy['en'] ?? null,
            'description_ar' => $this->privacy_policy['ar'] ?? null,
        ];
    }
}
