<?php
use App\Http\Controllers\DataClient;
use App\Http\Controllers\konsumen;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('client', DataClient::class);
Route::resource('konsumen', konsumen::class);