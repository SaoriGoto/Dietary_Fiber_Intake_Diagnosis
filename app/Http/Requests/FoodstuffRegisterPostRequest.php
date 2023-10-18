<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FoodstuffRegisterPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'foodstuff_name' => [
                'required',
                'regex:/^[ァ-ヴー]+$/u',
                'max:20',
                Rule::exists('dietary_fiber_data', 'foodstuff_name')->where(function ($query){
                    $query->where('foodstuff_name', $this->input('foodstuff_name'));
                }),
            ],
            'quantity' => [
                'required',
                'regex:/^[0-9]+$/u',
                'max:5'
                ]
        ];
    }
    public function messages()
    {
        return [
            'foodstuff_name.required' => '食材名は必須です。',
            'foodstuff_name.regex' => '食材名は全角カタカナで入力してください。',
            'foodstuff_name.max' => '食材名は20文字以内で入力してください。',
            'foodstuff_name.exists' => 'その食材はデータベースにありません。',
            'quantity.required' => '量は必須です。',
            'quantity.regex' => '量は半角数字で入力してください。',
            'quantity.max' => '量は5桁以内で入力してください。',
        ];
    }
}