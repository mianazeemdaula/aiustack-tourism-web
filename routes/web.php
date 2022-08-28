<?php

use App\Events\User\NewTourEvent;
use App\Models\Tour;
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


Route::get('/event', function () {
    return event(new NewTourEvent(Tour::find(2)));
    // return NewTourEvent::dispatch(Tour::find(1));
});
