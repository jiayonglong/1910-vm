<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hellow(){
        echo __METHOD__;
        echo date("Y-m-d H:i:s");
    }
}
