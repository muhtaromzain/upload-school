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
    return view('welcome');
});
Route::get('/test', function () {
    return view('import_excel.test');
});

Route::get('import-excel', 'ImportExcel\ImportExcelController@index');
Route::post('import-excel', 'ImportExcel\ImportExcelController@import');
Route::post('import-excel-1', 'ImportExcel\ImportExcelController@import1');
Route::post('import-excel-2', 'ImportExcel\ImportExcelController@import2');

// School
Route::get('import-school', 'ImportExcel\ImportExcelController@index2');
Route::post('import-school', 'ImportExcel\ImportExcelController@import_school');
