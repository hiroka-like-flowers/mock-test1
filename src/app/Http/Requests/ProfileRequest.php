<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png',
            'name' => 'required|max:20',
            'postcode' => 'required|regex:/^\d{3}-\d{4}$/',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'image.mimes' => '画像はjpegまたはpng形式でアップロードして下さい。',
            'name.required' => '名前を入力して下さい。',
            'name.max' => '名前は20文字以内で入力して下さい。',
            'postcode.required' => '郵便番号を入力して下さい。',
            'postcode.regex' => '郵便番号はXXX-XXXXの形式で入力して下さい。',
            'address.required' => '住所を入力して下さい。',
        ];
    }
}
