<?php
namespace script;

use Tmkook\Folder;

class biaoqian {

    function 开启缓存($url){
        $path = base_path();
        $cachepath = $path.'/public/cache/';
        $before = str_before($url,'/');
        $after = str_after($url,'/');
        if ($before !='' && !file_exists($cachepath.$before)){
            mkdir($cachepath.$before);
        }
        if(file_exists($cachepath.$url)){
            //有缓存文件直接调用
            $folder = new Folder();
            $folder->open( $cachepath.$before); //打开 folder
            $keydata = $folder->getSubFiles();
            include $cachepath.$url.'/12.html';
            //获取当前时间戳
            exit;
        }
        ob_start(); //开启缓存
    }

    function 生成缓存($url){
        //在文件代码末尾获取上面生成的缓存内容
        $path = base_path();
        $cachepath = $path.'/public/cache/';
        $content = ob_get_contents();
        //写入到缓存内容到指定的文件夹
        $fp = fopen($cachepath.$url,'w');
        fwrite($fp,$content);
        fclose($fp);
        ob_flush(); //从PHP内存中释放出来缓存（取出数据）
        flush(); //把释放的数据发送到浏览器显示
        ob_end_clean(); //清空缓冲区的内容并关闭这个缓冲区
    }

    static function  keyword()
    {
        return com('data/key');
    }

    function title(){
        return com('data/bt');
    }

    function body(){
        return com('data/txt');
    }

    function diy(){
        return com('data/zdy');
    }

    function random_url(){
       return  com('data/url');
    }

    function 图片地址($muluurl){
        return $muluurl.'/'.com('data/imgurl');  //图片地址
    }

    function 时间(){    //年-月-日
      return  date('Y-m-d');
    }

    function deletespace($url)
    {

        return str_replace(array("\r\n", "\r", "\n" ,"\t"), "", $url);
    }

    function 随机数字($num){    //随机拿取100到传入最大数
        return rand(100,$num);
    }

    function 文章标题(){
        return com('data/head');
    }

    function 固定标题(){       //固定标题调用的句子将与当前页面的title相同，使用此标签前提要使用过title标签
        return fixed('data/fixed');
    }

    function 正常标题(){       //非菠菜标题
        return com('data/zcbt');
    }

    function des(){      //description
        return com('data/des');
    }

    function 固定key(){      //与当前页面的KEY相同，使用此标签前提要使用过keyword标签
        return fixed('data/gdkey');
    }

    function 网站名称(){
        return com('data/name');
    }

    function 当前时间(){     //年-月-日 小时:分:秒
        return date('Y-m-d H:i:s');
    }

    function 随机时间(){        //获取三天内的随机时间,年-月-日 小时:分:秒
        $begintime = date('Y-m-d H:i:s' , strtotime("-3 day"));
        $begin = strtotime($begintime);
        $end = strtotime(date('Y-m-d H:i:s'));
        $timestamp = rand($begin, $end);
        return date("Y-m-d H:i:s", $timestamp);

    }

    function 过去时间($time){     //传入的参数：整数，代表想获取多少天前的时间,年-月-日 小时:分:秒
        return date('Y-m-d H:i:s' , strtotime("-".$time." day"));

    }

    function 重复标题(){      //重复上一次正常标题的内容
       return fixed('data/cfbt');
    }

    function 内容标题(){      //将从采集到的文章文档中，截取到内容的标题
        return bt('data/txt');
    }

    function 相对内容(){        //将从采集到的文章文档中，截取到内容(次内容将会和内容标题对应，所以要用此标签前必须使用内容标题)
        return con('data/txt');
    }



    function com($path){
        $keydata = \Illuminate\Support\Facades\Storage::allFiles($path);
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

        return deletespace($keyword[$num]);
    }

    function bt($path){
        $keydata = \Illuminate\Support\Facades\Storage::allFiles($path);

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

    function con($path){
        $folder = new Tmkook\Folder;
        $folder->open( base_path().$path); //打开 folder
        $keydata = $folder->getFolders();
        $body = '没有找到对应内容';
        for ($i = 0;$i <count($keydata);$i++) {
//            dd(count($keydata));
            $whichfile = $keydata[$i];
//            print $i < count($keydata);
            $keyfile = file($whichfile);
            foreach ($keyfile as $key => $item) {
                $keyword[$key] = $item;
            }
            $btbf = \Illuminate\Support\Facades\Storage::allFiles('data/btbf');
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

    function fixed($path){
        $keydata = \Illuminate\Support\Facades\Storage::allFiles($path);
        $whitchfile = $keydata[0];
        $keyfile = file($whitchfile);

        return deletespace($keyfile[0]);
    }


/**
 * @param $name   指定名字查询蜘蛛数量 Baidu=百度蜘蛛
 *                                  Sogou=搜狗蜘蛛
 *                                  360Spider=360蜘蛛
 *                                  神马=神马蜘蛛
 *                若只想查看蜘蛛的总数量，随意传入参数即可，但是必须要有参数
 * @return array  0为指定蜘蛛的总数量,1为当前小时指定蜘蛛的总数量，2为所有蜘蛛总数量，3为当前小时所有蜘蛛总数量
 */
    function spider($name){
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


