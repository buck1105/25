<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'specialist_id' => 'required',
            'email' => 'required|email',
            'image' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'address' => 'required',
        ];
    }
}
