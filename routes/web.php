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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::resource('patients', PatientController::class);

// Route::get('/pdf', 'PDFController@PDF')->name('descargarpdf');


Route::get('/pdfResults/{$id}', 'PDFController@PDFResults')->name('decargarPDFResults');

Route::get('pdfResults/{id}','PDFController@hemograma')->name('pdfResults');

// Route::get('pdfResults/{id}','PDFController@index')->name('pdfResults');