<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'document_number' => 'required|string|size:10|unique:employees,document_number',
            'cellphone_number' => 'required|string|size:10|unique:employees,cellphone_number',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ];
    }
}
