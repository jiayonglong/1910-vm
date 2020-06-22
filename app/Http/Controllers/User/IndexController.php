<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
class IndexController extends Controller
{
    public function reg(Request $request){
        return view("user.reg");
    }
    public function regDo(Request $request){
        $user_name=$request->input('user_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordker = $request->input('passwordker');
        //验证密码不能大于6位
        $len = strlen($password);
        if($len<6){
            die("密码不能小于6位");
        }
        //2次密码必须一致
        if($password !=$passwordker){
            die("密码不一致");
        }
        //用户是否存在
        $a=UserModel::where(['user_name'=>$user_name])->first();
        if($a){
            die("用户已存在");
        }
        $a=UserModel::where(['email'=>$email])->first();
        if($a){
            die("email已存在");
        }
        //密码生成
        $password = password_hash($password,PASSWORD_BCRYPT);
        $data=[
            'user_name'=>$user_name,
            'email'=>$email,
            'password'=>$password,
            'reg_time'=>time()
        ];
        $res = UserModel::insert($data);
        if($res)
        {
            //echo "注册成功";
            return redirect('user/login');
        }else{
            echo "注册失败";
        }
    }
    public function login(Request $request){
        return view("user.login");
    }
    public function loginDo(Request $request){
        $user_name = $request->input('user_name');
        $password = $request->input('password');
        echo '用户输入密码:'.$password;echo '</br>';
        //验证登录信息
        $u = UserModel::where(['user_name'=>$user_name])->first();
        echo '数据库密码：'.$u->password;echo '</br>';

        //验证密码
        $res = password_verify($password,$u->password);
        if($res){
            return redirect('user/');
            echo "登录 成功";
        }else{
            return redirect('user/login');
            echo "用户与密码不一致";
        }

    }
}
