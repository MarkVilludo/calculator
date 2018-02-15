<?php

/*
|--------------------------------------------------------------------------
| calculator Routes
|--------------------------------------------------------------------------
|
| Here is where you can register calculator apps
|
*/


Route::get('/add/{a}/{b}','CalculatorController@add');
Route::get('/subtract/{a}/{b}','CalculatorController@subtract');
