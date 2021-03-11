<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'date' => 'required',
            'user_id' => 'required|numeric',
            'name_customer' => 'required',
            'drug_code' => 'required',
            'qty' => 'required|numeric',
            'total' => 'required|numeric'
        ];
    }
}
