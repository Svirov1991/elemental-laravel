<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'email' => 'required|email',
            'message' => 'required|min:7|max:500'
        ];
    }
//    public function attributes()
//    {
//        return([
//            'name' => 'Имя'
//        ]);
//    }
    public function messages()
    {
        return([
            'name.required' => 'Поле имя обязательно к заполнению',
            'name.min' => 'В поле имя должнобыть как минимум 2 символа'
        ]);
    }
}
