<?php
/*
|--------------------------------------------------------------------------
| calculator Routes
|--------------------------------------------------------------------------
|
| Here is where you can register calculator apps
|
*/


Route::get('/add/{a}/{b}','MarkVilludo\Calculator\Controllers\CalculatorController@add');
Route::get('/subtract/{a}/{b}','MarkVilludo\Calculator\Controllers\CalculatorController@subtract');
