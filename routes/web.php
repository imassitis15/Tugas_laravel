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

Route::controller(GenreController::class)->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::post('/genre', 'store')->name('genre.store');
    Route::get('/genre/{id}/edit', 'edit')->name('genre.edit'); 
    Route::get('/genre/{id}', 'show')->name('genre.show');
    Route::put('/genre/{id}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'delete')->name('genre.delete');
  });