<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'index']);
Route::get('/tampil', [PageController::class,'tampil']);
Route::get('/beranda', [PageController::class,'beranda']);