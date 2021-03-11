<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugRequest extends FormRequest
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
            'icon' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'code' => 'required',
            'supplier_id' => 'required',
            'name_drug' => 'required',
            'producer' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ];
    }
}
