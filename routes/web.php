<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routes view
Route::get('/', function () {
    return view('app');
});

Route::view('/categorie', 'categorie');

//routes controllers

Route::resource('categories', 'CategorieController')->except([
    'show', 'create', 'edit'
]);

Route::resource('movies', 'Moviecontroller')->except([
    'show', 'create', 'edit']);
