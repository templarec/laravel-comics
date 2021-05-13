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
    $database = config('comics');

    return view('home')->with("comic", $database);
});
Route::get('/comic-detail/{id}', function ($id) {
    $database = config('comics');
       return view('comic-detail')->with("comic", $database[$id]);
})->name('detail');
