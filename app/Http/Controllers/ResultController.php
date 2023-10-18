<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodstuffRegisterPostRequest;
use App\Models\DietaryFiberData;

class ResultController extends Controller
{
    //calculate and display results
    public function result(FoodstuffRegisterPostRequest $request)
    {
        //Retrieve data that has successfully passed validation
        $foodstuff_name = $request->input('foodstuff_name');
        $quantity = $request->input('quantity');

        //Retrieve the necessary data from the database
        $foodstuffData = DietaryFiberData::where('foodstuff_name', $foodstuff_name)->firstOrFail();

        //Calculate the actual intake based on user input quantity
        $solubleFiberPer100g = $foodstuffData->soluble_fiber;
        $insolubleFiberPer100g = $foodstuffData->insoluble_fiber;

        $solubleFiber = ($solubleFiberPer100g / 100) * $quantity;
        $insolubleFiber = ($insolubleFiberPer100g / 100) * $quantity;

        //Define the target values
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