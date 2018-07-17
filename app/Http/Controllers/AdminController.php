<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $file =  file_exists('session.txt');
        if ($file){
            $session =  file('session.txt');

            if (!$session[0]){
                echo '没有权限';
            }
            if (time() - $session[1] > 86400 ){
                dd('登录超时');
            }
        }
    }



    public function dologin(Request $request)
    {
        $username = $request->input('name');
        $password = $request->input('password');
        if (empty($username)){
            return json_encode(['status'=>500,'msg'=>'用户名不能为空']);
        }
        if(empty($password)){
            return json_encode(['status'=>500,'msg'=>'密码不能为空']);
        }

        $auth =  file('auth.txt');
        $lusername =  self::deletespace($auth[0]);
        $lpassword =  self::deletespace($auth[1]);

        if ($username==$lusername && $password==$lpassword){

            $session =  fopen('session.txt','w');
            $status = '1'."\r\n".time();
            fwrite($session, $status);
            fclose($session);
            return redirect('admin/home');
        }else{
            $_SESSION['userstatus'] =1;
            return json_encode(['status'=>500,'msg'=>'登陆失败']);
        }
    }

    public function index()
    {
        return view('admin.index');
    }


    public function deletespace($url)
    {
        return  str_replace(array("\r\n", "\r", "\n" ,"\t"), "", $url);
    }

    public function home()
    {
        if ($_SESSION['userstatus']=1){
            return view('admin.home');
        }else{
            echo '没有权限访问页面';
        }
    }

    public function mulu()
    {
        if ($_SESSION['userstatus']=1){
            return view('admin.mulu');
        }else{
            echo '没有权限访问页面';
        }
    }

}
