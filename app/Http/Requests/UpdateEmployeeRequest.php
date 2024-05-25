<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'firstname' => 'sometimes|string|max:255',
            'lastname' => 'sometimes|string|max:255',
            'document_number' => 'sometimes|string|size:10|unique:employees,document_number,' . $this->route('employee'),
            'cellphone_number' => 'sometimes|string|size:10|unique:employees,cellphone_number,' . $this->route('employee'),
            'country' => 'sometimes|string|max:255',
            'city' => 'sometimes|string|max:255',
        ];
    }
}
