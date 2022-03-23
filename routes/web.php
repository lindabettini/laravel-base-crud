<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Util\Configuration;
use App\Models\Comic;

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
    $comics = Comic::all();
    return view('home', compact('comics'));
})->name('home');

Route::resource('comics', 'ComicController');

// Route::get('/comics', 'ComicsController@index')->name('comics.index');
// Route::get('/comics/{id}', 'ComicsController@show')->name('comics.show');
