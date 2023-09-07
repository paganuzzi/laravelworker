<?php

use App\Jobs\ProcessPodcast;
use Carbon\Carbon;
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
    return view('welcome');
});

Route::get('/queue', function () {
    ProcessPodcast::dispatch();
});
Route::get('/carbon', function () {
    echo Carbon::now()->calendar();
});
