<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/',[Home::class,"homepage"]);
Route::post('/',[Home::class,"insert"]);
Route::get('/delete/{id}',[Home::class,"delete"])->name("delete");
Route::get('/edit/{id}',[Home::class,"update"])->name("edit");
Route::post('/update',[Home::class,"updateData"])->name('updateData');