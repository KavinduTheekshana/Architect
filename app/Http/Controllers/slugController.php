<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class slugController extends Controller
{
    public function slug($string){
        // $string = "Within 3 days of-death the enzy mesthat once digested your dinner begin to eat you.";
        $string = strtolower($string);
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", "-", $string);
        $digits = 8;
        $code = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
        $combination = $string . '-'. (string)$code;
        return $combination ;
    }
}
