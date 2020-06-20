<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class TestController extends Controller
{
    public function hellow(){
        echo __METHOD__;
        echo date("Y-m-d H:i:s");
    }
    public function redis1(){
        $key= "name1";
        $val1 = Redis::get($key);
        echo '$val1: '.$val1;
    }
}
