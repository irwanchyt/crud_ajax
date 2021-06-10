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

    return view('crud');
    
});


Route::prefix('siswa')->group(function(){

    Route::get('/','SiswaController@index')->name('siswa');
    Route::post('/create','SiswaController@create')->name('siswa.create');
    Route::post('/{id}/update','SiswaController@index')->name('siswa.update');
    Route::get('/{id}/delete','SiswaController@delete')->name('siswa.delete');


});


