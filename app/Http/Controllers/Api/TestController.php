<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class TestController extends Controller
{
    public function a(){
        $key = 'access_total';
        $total = Redis::incr($key);

        if ($total > 10){
            echo "请求太频繁了，稍后再来吧";
        }else{
            echo '当前次数为：'.$total;
        }
    }
    public function b(){
        $key = 'access_total_b';
        $total = Redis::incr($key);

        if ($total > 10){
            echo "请求太频繁了，稍后再来吧";
        }else{
            echo '当前次数为：'.$total;
        }
    }
    public function c(){
        $key = 'access_total_c';
        $total = Redis::incr($key);

        if ($total > 10){
            echo "请求太频繁了，稍后再来吧";
        }else{
            echo '当前次数为：'.$total;
        }
    }
}
