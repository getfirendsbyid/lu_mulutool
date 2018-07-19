<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Tmkook\Folder;

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

    public function index(Request $request)
    {
        $pagesize = $request->input('pagesize');
        $pagenumber = $request->input('pagenumber');
        $logname = $request->input('logname');
        $folder = new Folder();
        $folder->open( base_path().'/routes'); //打开 folder
        $logfilearr = $folder->getSubFiles();
        $content =  file(base_path().'/'.'routes/zbroth_20180717.log');
        $str = '123.125.71.57 - - [17/Jul/2018:17:08:26 +0800] "GET / HTTP/1.1" 404 627 "-" "Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)"';
        for ($i=0;$i<count($content);$i++){

            if (strpos($content[$i],'Baiduspider')){
                $data['baidu'][] = $content[$i];
            }elseif(strpos($content[$i],'YisouSpider')){
                $data['shenma'][] = $content[$i];
            }elseif(strpos($content[$i],'Sogou')){
                $data['sogou'][] = $content[$i];
            }elseif(strpos($content[$i],'360spider')){
                $data['spider360'][] = $content[$i];
            }elseif(strpos($content[$i],'soso')){
                $data['soso'][] = $content[$i];
            }elseif(strpos($content[$i],'Googlebot')){
                $data['google'][] = $content[$i];
            }
        }
        $data['title'] = $logname;
        $data = json_encode($data);

        return view('admin.index',compact('data'));
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

    public function cha()
    {
        $a =  file('url/url.txt');
        $b = fopen("url/url1.txt", "w");
        foreach ($a as $item){
            fwrite($b, 'https://www.'.str_after($item,'https://'));

        }
        fclose($b);
    }



    public function sd($no='1/2/3/44')
    {
       dd(self::mkdirs(base_path().'/public/cache/'.$no));
    }

    public static function mkdirs($dir, $mode = 0777)
    {
        if (is_dir($dir) || @mkdir($dir, $mode)) return TRUE;
        if (!self::mkdirs(dirname($dir), $mode)) return FALSE;
        return mkdir($dir, $mode);
    }

}
