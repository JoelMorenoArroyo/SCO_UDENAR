<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;

Route::get('/', function () {
    return view('welcome');
});

route::get('test',[PrimerControlador::class,'index']);

