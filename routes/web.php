<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view(' I hate branches !!!! for the second and third and fourth time hahahaha ');
});

Route::get('/About', function () {
    return view(' Helllllllo From the Other siiiiiiiiiiiiide  ');
});