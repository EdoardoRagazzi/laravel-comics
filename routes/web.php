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
//Route della Home
Route::get('/', function () {
    $nav= config('nav');
    $data = ['nav'=> $nav];
    return view('home',$data);
})->name('homepage');

// Route::get('/characters', function () {
//     return view('characters');
// })->name('characterspage');

Route::get('/comics', function () {
    $comics = config('comics');
    $data =  ['comics' => $comics];
    return view('comics', $data);
})->name('comicspage');

Route::get('/header', function(){
    $nav = config('nav');
    $data = ['nav'=> $nav];
    return view('header', $data);
})->name('headerpage');


