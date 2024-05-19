<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\userController;
use App\http\Controllers\ViewController;
use App\Models\Home;
Route::get('/', [ViewController::class,'home']);
Route::get('/register', [userController::class,'index']);
Route::post('/register', [userController::class,'register']);
Route::get('/userLists', [userController::class,'userLists']);
Route::get('/home',function(){
    $data = Home::all();
    echo "<pre>";
    print_r($data->toArray());
});