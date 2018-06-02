<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Symfony\Component\DomCrawler\Crawler;

class SpiderController extends Controller
{

    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 100;  // 同时并发抓取

    protected $signature = 'test:multithreading-request';
    protected $description = 'Command description';


    public function  __construct()
    {

    }


    public function  findincluded(Request $request)
    {
        $keyword = $request->input('keyword');
//        $mulu = $request->input('mulu');
        $tool = $request->input('tool');
        if (empty($keyword)){
            return json_encode(['status'=>'500','msg'=>'没有查询关键词']);
        }
//        if (empty($mulu)){
//            return json_encode(['status'=>'500','msg'=>'没有要查询的目录']);
//        }
        if (empty($tool)){
            return json_encode(['status'=>'500','msg'=>'没有要查询的搜索引擎']);
        }

//        switch ($tool){
//            case 1:  //百度
//                for ($i=0;$i<10;$i++){
//                    $this->url[$i] ='https://m.sm.cn/s?q='.$keyword.'&page='.$i.'&by=next&from=smor&safe=1';
//                }
//                 continue ;
//            case 2:  //神马
//                for ($i=0;$i<100;$i++){
//                    $this->url[$i] ='https://m.sm.cn/s?q='.$keyword.'&page='.$i.'&by=next&from=smor&safe=1';
//                }
//                continue ;
//            case 3:  //360
//                for ($i=0;$i<100;$i++){
//                    $this->url[$i] ='https://m.sm.cn/s?q='.$keyword.'&page='.$i.'&by=next&from=smor&safe=1';
//                }
//                continue ;
//            case 4:  //搜狗
//                for ($i=0;$i<100;$i++){
//                    $this->url[$i] ='https://m.sm.cn/s?q='.$keyword.'&page='.$i.'&by=next&from=smor&safe=1';
//                }
//                continue ;
//            default:
//                echo '没有参数';
//        }

        $this->url[0] ='https://m.sm.cn/s?q=百信手机&page=1&by=next&from=smor&safe=1';
        $this->url[1] ='https://m.sm.cn/s?q=百信手机&page=2&by=next&from=smor&safe=1';
        $this->url[2] ='https://m.sm.cn/s?q=百信手机&page=3&by=next&from=smor&safe=1';

        $this->totalPageCount = count($this->url);
        $client = new Client();
        $requests = function ($total) use ($client) {
            foreach ($this->url as $uri) {
                yield function() use ($client, $uri) {
                    return $client->getAsync($uri);
                };
            }
        };

        $pool = new Pool($client, $requests($this->totalPageCount), [
            'concurrency' => $this->concurrency,
            'fulfilled'   => function ($response, $index){
                $chapterdata =   mb_convert_encoding($response->getBody()->getContents(), 'utf-8', 'GBK,UTF-8,ASCII');
                echo "请求第 $index 个请求，小说id" .$this->url[$index];;
                $crawler = new Crawler();
                $crawler->addHtmlContent($chapterdata);
                //补充小说描述 封面 作者 热点 连载状态
//                $content['created_at'] = date('Y-m-d H:i:s');
//                $content['updated_at'] = date('Y-m-d H:i:s');
//                $content['chapterid'] = $this->novel[$index]->id;
//                $content['content'] = self::filterEmoji($crawler->filterXPath('//*[@id="htmlContent"]')->text());
                ob_flush();
                flush();
                $this->countedAndCheckEnded($chapterdata);
            },
            'rejected' => function ($reason, $index){
//                    log('test',"rejected" );
//                    log('test',"rejected reason: " . $reason );
                $this->countedAndCheckEnded();
            },
        ]);

        $promise = $pool->promise();
        $promise->wait();

    }

    public function countedAndCheckEnded($chapterdata)
    {
        if ($this->counter < $this->totalPageCount){
            $this->counter++;
            return;
        }
        print_r($chapterdata);
        echo("请求结束！");
    }



    function filterEmoji($str)
    {
        $str = preg_replace_callback(
            '/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '' : $match[0];
            },
            $str);

        return $str;
    }



}
