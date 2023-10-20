<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\FoodstuffRegisterController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\FoodstuffQuantityGuidelinesController;
use App\Http\Controllers\DietaryFiberListController;

//Top page
Route::get('/top',[TopController::class,'top']);

//Foodstuff-register page
Route::get('/foodstuff-register',[FoodstuffRegisterController::class,'display']);
Route::post('/foodstuff-register',[FoodstuffRegisterController::class,'register']);

//Result page
Route::get('/result',[ResultController::class,'result'])->name('result');
Route::post('/result', [ResultController::class, 'result'])->name('result_chart');

//Dietary-fiber-list page
Route::get('/dietary-fiber-list',[DietaryFiberListController::class,'list']);
