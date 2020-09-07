<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/pizzas', function() {
    $pizza = ['type'=> 'hawaiian', 'base'=> 'chessy trust', 'price'=> 10];
    return view('pages.pizzas', $pizza);
});

Route::get('/pizzas/{id}', function($id) {
    return view('pages.details', ['id' => $id]);
});