<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

// Route::get('/', function () {
//     return view('welcome');
Route::get("/master", function () {
    return view("template.master");
});

Route::get('/tem/master', [usercontroller::class, 'master']);
Route::get('/form', [usercontroller::class, 'form']);