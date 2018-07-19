<?php
namespace script;

use function GuzzleHttp\Psr7\str;
use Tmkook\Folder;
use TYPO3\CMS\Core\Exception;



class biaoqian {




    static function 开启缓存($url){
//        dd($url);
        $path = base_path();
        $cachepath = $path.'/public/cache/';
        $num = strripos($url,'/');
        $filearr = explode('/',$url);

        $before = str_before($url,'/');
        if(substr_count($url,'/')>=1){
            $before = substr($url,0,$num);
            if(strpos($url,'html')==false){
                $url = $url.'.html';
            }
        }
        $after = str_after($url,'/');
        if ($before !='' && !file_exists($cachepath.$before)){
            if(strpos($before,'.html')!==false){
                $before = str_before($before,'.');
                if (!file_exists($cachepath.$before)){
                    mkdir($cachepath.$before);
                }
            }else{
                mkdir($cachepath.$before);
            }
        }
        $address = $cachepath.$url;
//        dd(strpos($url,'.html')!==false);
        if(strpos($url,'index.html')!==false){
            $address = $cachepath.$before;
        }elseif (strpos($url,'.html')!==false){
            if (strpos($url,'/')==false){
                $url = str_before($url,'.').'/'.$url;
                $address = $cachepath.$before;
            }else{
                $address = $cachepath.$before;
                //            dd($address);
                if (strpos($address,'.html')!==false){
                    $address = $cachepath.str_before($before,'.');
                }
            }
        }else{
            $address = $cachepath.$before;
        }
        if(strcmp($url,'/')==0){
            if(file_exists($cachepath.'/index/index.html')){
                include $cachepath.'/index/index.html';
            }

        }else{
//            dd($cachepath.$url);
//            if(file_exists($address)){
//            dd($cachepath.$url);

            if(file_exists($cachepath.$url)){
//                dd($address);
                //有缓存文件直接调用
                $folder = new Folder();

                if (self::不是标签($address)==false){


                    $folder->open( $address); //打开 folder
                    if (strpos($url,'index.html')!==false){

                        include $cachepath.$url;
                    }elseif (strpos($url,'.html')!==false){
                        if (strpos($url,'/')){
//                                dd($cachepath.$url);
                            include $cachepath.$url;
                        }else{
                            include $address.'/'.$url;
                        }

                    }elseif (strpos($url,'/')!==false){
                        include $cachepath.$url.'.html';
                    }else{
                        include $cachepath.$url.'/'.$before.'.html';

                    }

                    //获取当前时间戳
                    exit;
                }
            }
        }
        ob_start(); //开启缓存
    }

    static function 不是标签($path){//判断文件夹是否为空
//        dd($path);
        $i=0;
        if($handle=@opendir($path)) {
            while(false!==($file=readdir($handle))){//读取文件夹里的文件

                if($file!="."&&$file!="..") {

                    $file_array[$i]["filename"]=$file;
//                    dd($file);
                    if ($file=='index.html'){
                        $i--;
                    }
                    $i++;

                }
            }
            closedir($handle);//关闭文件夹

        }


        if($i==0){
            return true;//空
        }else{
            return false;//no空
        }
    }

    static function 生成缓存($url){
        //在文件代码末尾获取上面生成的缓存内容
        $path = base_path();
        $cachepath = $path.'/public/cache/';
        $content = ob_get_contents();
        //写入到缓存内容到指定的文件夹
        $before = str_before($url,'/');
        $address = $cachepath.str_before($before,'.');
        if(strpos($url,'index.html')!==false){
            $fp = fopen($cachepath.$url,'w');

        }elseif (strpos($url,'.html')!==false){
            if (strpos($url,'/')){
                $fp = fopen($cachepath.$url,'w');
            }else{
                $fp = fopen($address.'/'.$url,'w');
            }

        }elseif (strpos($url,'/')!==false){
            $fp = fopen($cachepath.$url.'.html','w');
        }else{
            $fp = fopen($cachepath.$url.'/'.$url.'.html','w');
        }

        fwrite($fp,$content);
        fclose($fp);
        ob_flush(); //从PHP内存中释放出来缓存（取出数据）
        flush(); //把释放的数据发送到浏览器显示
        ob_end_clean(); //清空缓冲区的内容并关闭这个缓冲区

    }



    static function  keyword()
    {
        return self::com('data/key');
    }

    static function title(){
        return self::com('data/bt');
    }

    static function body(){
        return self::com('data/txt');
    }

    static function diy(){
        return self::com('data/zdy');
    }

    static function random_url(){
        return  self::com('data/url');
    }

    static function 图片地址($muluurl){
        return $muluurl.'/'.self::com('data/imgurl');  //图片地址
    }

    static function 时间(){    //年-月-日
        return  date('Y-m-d');
    }

    static function url2(){
        return  self::com('data/url2');
    }

    static function url1(){
        return  self::com('data/url1');
    }

    static function deletespace($url)
    {

        return str_replace(array("\r\n", "\r", "\n" ,"\t"), "", $url);
    }

    static function 随机数字($num){    //随机拿取100到传入最大数
        return rand(100,$num);
    }

    static function 文章标题(){
        return self::com('data/head');
    }

    static function 固定标题(){       //固定标题调用的句子将与当前页面的title相同，使用此标签前提要使用过title标签
        return self::fixed('data/fixed');
    }

    static function 正常标题(){       //非菠菜标题
        return self::com('data/zcbt');
    }

    static function des(){      //description
        return self::com('data/des');
    }

    static function 固定key(){      //与当前页面的KEY相同，使用此标签前提要使用过keyword标签
        return self::fixed('data/gdkey');
    }

    static function 网站名称(){
        return self::com('data/name');
    }

    static function 当前时间(){     //年-月-日 小时:分:秒
        return date('Y-m-d H:i:s');
    }

    static function 随机时间(){        //获取三天内的随机时间,年-月-日 小时:分:秒
        $begintime = date('Y-m-d H:i:s' , strtotime("-3 day"));
        $begin = strtotime($begintime);
        $end = strtotime(date('Y-m-d H:i:s'));
        $timestamp = rand($begin, $end);
        return date("Y-m-d H:i:s", $timestamp);

    }

    static function 随机日期(){        //获取三天内的随机时间,年-月-日 小时:分:秒
        $begintime = date('Y-m-d' , strtotime("-3 day"));
        $begin = strtotime($begintime);
        $end = strtotime(date('Y-m-d'));
        $timestamp = rand($begin, $end);
        return date("Y-m-d", $timestamp);

    }

    static function 过去时间($time){     //传入的参数：整数，代表想获取多少天前的时间,年-月-日 小时:分:秒
        return date('Y-m-d H:i:s' , strtotime("-".$time." day"));

    }

    static function 重复标题(){      //重复上一次正常标题的内容
        return self::fixed('data/cfbt');
    }

    static function 内容标题(){      //将从采集到的文章文档中，截取到内容的标题
        return self::bt('data/txt');
    }

    static function 相对内容(){        //将从采集到的文章文档中，截取到内容(次内容将会和内容标题对应，所以要用此标签前必须使用内容标题)
        return self::con('data/txt');
    }



    static function com($path){

        $folder = new Folder();
        $folder->open( base_path().'/public/'.$path); //打开 folder
        $keydata = $folder->getFiles();
        $whitchfile = $keydata[rand(0,count($keydata)-1)];

        $keyfile = file($whitchfile);

        foreach ($keyfile as $key=>$item){
            $keyword[$key] = $item;
        }

        $count = count($keyword);
        $num = rand(0,$count-1);
        if(strcmp($path,'data/bt')==0){
            $zcbt=@fopen('data/fixed/sen.txt','w');
            fwrite($zcbt,$keyword[$num]);
            fclose($zcbt);
        }elseif (strcmp($path,'data/key')==0){
            $gdkey=@fopen('data/gdkey/key.txt','w');
            fwrite($gdkey,$keyword[$num]);
            fclose($gdkey);
        }elseif (strcmp($path,'data/zcbt')==0){
            $gdkey=@fopen('data/cfbt/bt.txt','w');
            fwrite($gdkey,$keyword[$num]);
            fclose($gdkey);
        }

        return self::deletespace($keyword[$num]);
    }

    static function bt($path){
        $folder = new Folder();
        $folder->open( base_path().'/public/'.$path); //打开 folder
        $keydata = $folder->getFiles();
        $whichfile = $keydata[rand(0,count($keydata)-1)];
        $keyfile= file($whichfile);
        foreach ($keyfile as $key=>$item){
            $keyword[$key] = $item;
        }
        $count = count($keyword);
        $num = rand(0,$count-1);
        $btbf = @fopen('data/btbf/bt.txt','w');
        $line = $keyword[$num];
        $max = strpos($line,'#');
        $bt = substr($line,0,$max);
//        $bt = strrchr($line,'#');
        fwrite($btbf,$bt);
        fclose($btbf);
        return $bt;
    }

    static function con($path){
        $folder = new Folder();
        $folder->open( base_path().'/public/'.$path); //打开 folder
        $keydata = $folder->getFiles();
        $body = '没有找到对应内容';
        for ($i = 0;$i <count($keydata);$i++) {
//            dd(count($keydata));
            $whichfile = $keydata[$i];
//            print $i < count($keydata);
            $keyfile = file($whichfile);
            foreach ($keyfile as $key => $item) {
                $keyword[$key] = $item;
            }
            $folder->open( base_path().'/public/data/btbf'); //打开 folder
            $btbf = $folder->getFiles();
//            dd($btbf);
            $whitchfile = $btbf[0];
            $keyfile = file($whitchfile);
//            $body = $keyword;
//        dd($keyword);
            for ($j = 0; $j < count($keyword); $j++) {

                if (strpos($keyword[$j], $keyfile[0]) !== false) {
                    $body = $keyword[$j];
//                    dd(111);
                    break 2;
                }
            }
        }
//        dd($body);
        $num = strripos($body,'#');
        $neirong = substr($body,$num+1);
        return $neirong;
    }

    static function fixed($path){
        $folder = new Folder();
        $folder->open( base_path().'/public/'.$path); //打开 folder
        $keydata = $folder->getFiles();
        $whitchfile = $keydata[0];
        $keyfile = file($whitchfile);

        return self::deletespace($keyfile[0]);
    }


    /**
     * @param $name   指定名字查询蜘蛛数量 Baidu=百度蜘蛛
     *                                  Sogou=搜狗蜘蛛
     *                                  360Spider=360蜘蛛
     *                                  神马=神马蜘蛛
     *                若只想查看蜘蛛的总数量，随意传入参数即可，但是必须要有参数
     * @return array  0为指定蜘蛛的总数量,1为当前小时指定蜘蛛的总数量，2为所有蜘蛛总数量，3为当前小时所有蜘蛛总数量
     */
    static function spider($name){
        $file = @fopen(date('Y-m-d').'.txt','a+');//读取当天蜘蛛文件，若文件不存在则会自动创建一个
        $num = array(0,0,0,0);
        while(!feof($file))
        {
            $line = fgets($file);
            $voo = strpos($line,$name);//判断当前行的记录是否为指定蜘蛛
//           dd($voo);
            if($voo){
                $num[0]++;//指定蜘蛛总数量加一
                $is = strpos($line,date('Y-m-d H'));//判断当前的记录是否是当前小时的记录
                if ($is){
                    $num[1]++;//当前小时指定猪猪数量加一
                }
            }
            $num[2]++;//所有蜘蛛总数量加一
            $is = strpos($line,date('Y-m-d H'));//判断当前的记录是否是当前小时的记录
            if ($is){
                $num[3]++;//当前小时猪猪总数量加一
            }
        }
        fclose($file);//关闭文件
        return $num;
    }
}


