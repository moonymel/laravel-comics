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
    $comics = config('comics');
    $bluesections = config('bluesections');
    return view('homepage', compact('comics', 'bluesections'));
})->name('homepage');


Route::get('/comics/{param}', function ($id) {
    $comics = config('comics');
    $comic = null;

    foreach($comics as $item){
        if($item['id'] == $id) {
            $comic = $item;
        }
    }

    return view('comic', compact('comics', 'comic'));
})->name('comic');