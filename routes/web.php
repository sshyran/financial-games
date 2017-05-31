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

Route::get('/balance-sheet', 'GameController@bsheet');
Route::get('/balance-sheet-explaination', 'GameController@bsheetExplanation');
Route::get('/balance-sheet-line-items', 'GameController@bsheetLineItems');

Route::get('/balance-sheet-quiz', 'GameController@bsheetQuiz');
