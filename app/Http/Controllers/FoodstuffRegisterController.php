<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoodstuffRegisterPostRequest;
use App\Models\DietaryFiberData;
use Illuminate\Support\Facades\Redirect;

class FoodstuffRegisterController extends Controller
{
    //Foodstuff_register page display
    public function display()
    {
        return view('foodstuff_register');
    }


    //Register the foodstuff name and quantity
    public function register(FoodstuffRegisterPostRequest $request)
    {
        //Retrieve validated data
        $validated_data = $request->validated();

        $foodstuff_name = $validated_data['foodstuff_name'];
        $quantity = $validated_data['quantity'];

        //Pass the data to ResultController when the validation is successful
        return Redirect::route('result', compact('foodstuff_name', 'quantity'));

    }
}