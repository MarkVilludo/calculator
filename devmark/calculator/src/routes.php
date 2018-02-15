<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Devmark\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devmark\Calculator\CalculatorController@subtract');