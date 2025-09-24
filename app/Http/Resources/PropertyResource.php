<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'rooms'       => $this->rooms,
            'floor'       => $this->floor,
            'title'       => $this->title,
            'purpose_type'       => $this->purpose_type,
            'price'       => $this->price,
            'beds'        => $this->beds,
            'bathrooms'   => $this->bathrooms,
            'surface'     => $this->surface,
            'terrace'     => (bool) $this->terrace,
            'lift'        => (bool) $this->lift,
            'top_list'        => (bool) $this->top_list,
            'wifi'        => (bool) $this->wifi,
            'pool'        => (bool) $this->pool,
            'furnished'        => (bool) $this->furnished,
            'fitness'        => (bool) $this->fitness,
            'sea_view'        => (bool) $this->sea_view,
            'maid_room'        => (bool) $this->maid_room,
            'parking'        => (bool) $this->parking,
            'location'    => $this->location,
            'latitude'    => $this->latitude,
            'longitude'   => $this->longitude,
            'description' => $this->description,
            'notes'       => $this->notes,
            'call'        => $this->call,
            'whatsapp'    => $this->whatsapp,
            'email'       => $this->email,
            'images'      => $this->images ? collect($this->images)->map(fn ($img) => asset('storage/' . $img)) : [],
            'floor_plans' => $this->floor_plans ? collect($this->floor_plans)->map(fn ($plan) => asset('storage/' . $plan)) : [],
            'video'       => $this->video ? asset('storage/' . $this->video) : [],
            'category' => new CategoryResource($this->category),
            'property_plan' => new PlanResource($this->plan),
        ];
    }
}
