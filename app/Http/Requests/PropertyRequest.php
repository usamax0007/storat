<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PropertyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id'      => 'required',
            'property_plan_id' => 'required',
            'purpose_type'     => 'required',
            'images'           => 'nullable|array',
            'images.*'         => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'name'             => 'required|string|max:255',
            'title'            => 'nullable|string|max:255',
            'price'            => 'required|numeric|min:0',
            'rooms'            => 'nullable|numeric|min:0',
            'beds'             => 'nullable|integer|min:0',
            'bathrooms'        => 'nullable|integer|min:0',
            'surface'          => 'nullable|numeric|min:0',
            'floor'            => 'nullable|numeric|min:0',
            'terrace'          => 'nullable|boolean',
            'lift'             => 'nullable|boolean',
            'location'         => 'nullable|string|max:255',
            'latitude'         => 'nullable|numeric',
            'longitude'        => 'nullable|numeric',
            'video'            => 'nullable',
            'description'      => 'nullable|string',
            'floor_plans'      => 'nullable|array',
            'floor_plans.*'    => 'file|mimes:jpg,jpeg,png,pdf|max:4096',
            'notes'            => 'nullable|string',
            'call'             => 'nullable|string|max:20',
            'whatsapp'         => 'nullable|string|max:20',
            'email'            => 'nullable|email|max:255',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        // Dump errors and stop execution
        dd($validator->errors()->toArray());

        // Or return JSON response for API
        // throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
