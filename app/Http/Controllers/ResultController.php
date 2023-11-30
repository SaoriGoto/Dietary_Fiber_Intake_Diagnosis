<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodstuffRegisterPostRequest;
use App\Models\DietaryFiberData;

class ResultController extends Controller
{
    //計算した結果データの表示
    public function result(FoodstuffRegisterPostRequest $request)
    {
        //バリデーションが成功したデータの取得
        $foodstuff_name = $request->input('foodstuff_name');
        $quantity = $request->input('quantity');

        //データベースから必要なデータの取得
        $foodstuffData = DietaryFiberData::where('foodstuff_name', $foodstuff_name)->firstOrFail();

        //ユーザーの入力量を基に食物繊維摂取量を計算(データベースのデータは食材100gあたりの食物繊維量の為、データの数値を1gあたりに変換してから計算)
        $solubleFiberPer100g = $foodstuffData->soluble_fiber;
        $insolubleFiberPer100g = $foodstuffData->insoluble_fiber;

        $solubleFiber = ($solubleFiberPer100g / 100) * $quantity;
        $insolubleFiber = ($insolubleFiberPer100g / 100) * $quantity;

        //食物繊維目標摂取量の定義(比較表示用)
        $targetValueSoluble = 13;
        $targetValueInsoluble = 6.5;

        return view('result', compact(
            'solubleFiber',
            'insolubleFiber',
            'targetValueSoluble',
            'targetValueInsoluble'
        ));
    }
}