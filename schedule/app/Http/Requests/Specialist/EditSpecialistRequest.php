<?php

namespace App\Http\Requests\Specialist;

use Illuminate\Foundation\Http\FormRequest;

class EditSpecialistRequest extends FormRequest
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
          'name' => 'required|min:3',
          'description' => 'required|string'
      ];
  }

  public function messages() {
    return [
        'name.required' => 'Trường :attribute không được để trống',
        'name.min' => ' Trường :attribute phải có trên 3 kí tự',
        'description.required' => ' Trường :attribute không được để trống',
        'description.string' => ' Trường :attribute phải là chuỗi kí tự'

    ];
}
}
