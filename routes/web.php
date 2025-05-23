<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ListProdukController;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/listproduk', [ListProdukController::class, 'show']);
