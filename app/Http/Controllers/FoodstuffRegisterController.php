<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodstuffRegisterPostRequest;
use App\Models\DietaryFiberData;
use Illuminate\Support\Facades\Redirect;

class FoodstuffRegisterController extends Controller
{
    //Foodstuff_registerページの表示
    public function display()
    {
        return view('foodstuff_register');
    }


    //食材名と量の登録
    public function register(FoodstuffRegisterPostRequest $request)
    {
        //バリデーション済データの取得
        $validated_data = $request->validated();

        $foodstuff_name = $validated_data['foodstuff_name'];
        $quantity = $validated_data['quantity'];

        //バリデーションが成功したデータをResultControllerに渡す
        return Redirect::route('result', compact('foodstuff_name', 'quantity'));

    }
}