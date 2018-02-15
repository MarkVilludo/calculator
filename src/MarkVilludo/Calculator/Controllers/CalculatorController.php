<?php

namespace MarkVilludo\Calculator\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use MarkVilludo\Calculator\Calculator;

class CalculatorController extends Controller
{
    //
    public function __construct()
    {

    }

    public function add($a, $b) {
    	$calculator = new Calculator;
    	return $calculator->add($a,$b);
    }

 	public function subtract($a, $b) {
    	$calculator = new Calculator;
    	return $calculator->subtract($a,$b);
    }
}
