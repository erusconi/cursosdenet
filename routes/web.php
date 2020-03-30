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

Route::get('/', function () {
    $categorias = DB::table('categorias')->get();
    return view('home', ['categorias' => $categorias]);
});

// Route::get('/', 'Categoria@lista');
