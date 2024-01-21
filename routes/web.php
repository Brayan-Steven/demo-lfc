<?php

use Illuminate\Routing\Route as RoutingRoute;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeLFC;
use App\Http\Controllers\formats;


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

Route::get('/', [HomeLFC::class,'post']);
// Route::get('/formats', [formats::class,'resolution']);



Route::get('/formats', [formats::class,'resolution'])->name('');
