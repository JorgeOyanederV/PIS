<?php

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
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portafolio','portafolio')->name('portafolio');
Route::view('/contact','contact')->name('contact')->name('contact');

Route::get('/cargar_asignaturas', 'RamosController@index')->name('ramos.index');
Route::post('import-list-excel', 'RamosController@importExcel')->name('ramos.import.excel');