<?php

namespace App\Http\Requests;

use Illuminate\Illuminate\Http\FormRequest;

class Order extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'delivaryFees_id' => 'required|integer',
            'address' => 'required|string',
            'terms' => 'required|string',
        ];
    }
}
