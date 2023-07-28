<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|string',
            'surname'=> 'nullable|string',
            'patronymic'=> 'nullable|string',
            'age'=> 'nullable|integer',
            'address'=> 'nullable|string',
            'gender'=> 'nullable|integer',
        ];
    }
}