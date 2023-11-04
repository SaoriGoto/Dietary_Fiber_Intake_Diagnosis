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
            'foodstuff_name.required' => 'ー 食材名は必須です。ー',
            'foodstuff_name.regex' => 'ー 食材名は全角カタカナで入力してください。ー',
            'foodstuff_name.max' => 'ー 食材名は20文字以内で入力してください。ー',
            'foodstuff_name.exists' => 'ー その食材はデータベースにありません。ー',
            'quantity.required' => 'ー 量は必須です。ー',
            'quantity.regex' => 'ー 量は半角数字で入力してください。ー',
            'quantity.max' => 'ー 量は5桁以内で入力してください。ー',
        ];
    }
}