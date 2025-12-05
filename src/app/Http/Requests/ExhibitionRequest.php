<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'description' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png',
            'category' => 'required',
            'condition' => 'required',
            'price' => 'required|integer|min:0',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '商品名を入力して下さい。',
            'description.required' => '商品説明を入力して下さい。',
            'description.max' => '商品説明は255文字以内で入力して下さい。',
            'image.required' => '画像をアップロードして下さい。',
            'image.mimes' => '画像はjpegまたはpng形式でアップロードして下さい。',
            'category.required' => 'カテゴリーを選択して下さい。',
            'condition.required' => '商品の状態を選択して下さい。',
            'price.required' => '価格を入力して下さい。',
            'price.integer' => '価格は整数で入力して下さい。',
            'price.min' => '価格は0円以上で入力して下さい。',
        ];
    }
}
