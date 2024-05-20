<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\userController;
use App\http\Controllers\ViewController;
use App\Models\Home;
Route::get('/', [ViewController::class,'home']);
Route::get('/userLists', [userController::class,'userLists']);

Route::get('/userList', [userController::class,'index']);
Route::post('/userList', [userController::class,'create'])->name('create-user');

Route::get('/userList/edit/{id}',[userController::class,'edit'])->name('userList-edit');
Route::get('/userList/delete/{id}',[userController::class,'delete'])->name('userList-delete');
Route::get('/home',function(){
    $data = Home::all();
    echo "<pre>";
    print_r($data->toArray());
});