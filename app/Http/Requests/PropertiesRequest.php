<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'sometimes',
            'sub_category_id' => 'sometimes',
            'purpose_type'    => 'sometimes',
            'min_price'       => 'sometimes',
            'max_price'       => 'sometimes',
        ];
    }

}
