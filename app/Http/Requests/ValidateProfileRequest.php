<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProfileRequest extends FormRequest
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
			//'email' => 'required|email|max:200|unique:users',
			'firstname' => 'required|string|max:50',
			'lastname' => 'required|string|max:50',
			'middlename' => 'required|string|max:50',
			//'gender' => 'required',
			//'birthdate' => 'required|date',
			'address' => 'required|max:150',
        ];
    }
}
