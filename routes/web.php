<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\FoodstuffRegisterController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\FoodstuffQuantityGuidelinesController;
use App\Http\Controllers\DietaryFiberListController;

//Topページ
Route::get('/',[TopController::class,'top']);

//Foodstuff-registerページ
Route::get('/foodstuff-register',[FoodstuffRegisterController::class,'display']);
Route::post('/foodstuff-register',[FoodstuffRegisterController::class,'register']);

//Resultページ
Route::get('/result',[ResultController::class,'result'])->name('result');
Route::post('/result', [ResultController::class, 'result'])->name('result_chart');

//Dietary-fiber-listページ
Route::get('/dietary-fiber-list',[DietaryFiberListController::class,'list']);
