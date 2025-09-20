<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'email'     => $this->support_email,
            'whatsapp'  => $this->support_whatsapp,
            'website'   => $this->support_website,
            'instagram' => $this->support_instagram,
            'facebook'  => $this->support_facebook,
            'twitter'   => $this->support_twitter,
            'threads'   => $this->support_threads,
            'linkedin'  => $this->support_linkedin,
        ];
    }
}
