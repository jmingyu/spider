<?php
/**
 * Created by PhpStorm.
 * User: jiangmingyu
 * Date: 2017/3/17 0017
 * Time: 下午 16:26
 */
define('ROOT',dirname(__FILE__).'/');
ini_set("memory_limit", "1024M");
//require('lib/phpQuery/phpQuery.php');
require ('lib/QueryList/vendor/autoload.php');
require ('config/config.php');//数据库配置
require ('lib/NotORM/NotORM.php');//数据库类
require ('Core/core.php');


//var_dump($db->anjuke_zu()->insert($array));
curl_get("http://hz.zu.anjuke.com/fangyuan/p1/",0);
//curl_get(null,$db);
function curl_get($url,$cycle)
{
    $t1 = microtime(true);//记录开始时间
    //采集页面信息
    $refer = "http://hz.zu.anjuke.com";
    $header[] = "Cookie: " . "appver=1.5.0.75771;";
    $agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36";
    $ch = curl_init();
    $timeout = 5;
    $ip=fackip::ip();
//    $cip = '123.125.68.'.mt_rand(0,254);
//    $xip = '125.90.88.'.mt_rand(0,254);
    $fackip=array(
        'CLIENT-IP:'.$ip,
        'X-FORWARDED-FOR:'.$ip,
    );
//    var_dump($fackip);
    curl_setopt($ch, CURLOPT_USERAGENT,$agent);
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt ($ch, CURLOPT_HTTPHEADER , $fackip);
    $file_contents = curl_exec($ch);
    curl_close($ch);
    var_dump($file_contents);
    if(!$file_contents){
        echo '服务器拒绝';
        exit;
    }
    //设置规则
    $rules = array(
        //采集id为one这个元素里面的纯文本内容
        'title' => array('.zu-info>h3>a','title'),
        'type'  => array('.zu-info>.tag','text'),
        'price'  => array('.zu-side','text'),
        'local'  => array('.zu-info>address','text'),
        'link'   => array('.zu-info>h3>a','href'),
    );
    $query=new \QL\QueryList();
    $data = $query->Query($file_contents,$rules)->data;
    foreach($data as $v){
        if(!isset($v['title'])){
            continue;
        }
        $v['local']=trim ( $v['local'] );
        $GLOBALS['db']->anjuke_zu()->insert($v);//入库
    }
    $rules = array(
        'next' => array('.aNxt','href'),
    );
    $next = $query->Query($file_contents,$rules)->data;
    $t2 = microtime(true);//记录程序结束时间
    echo $data;
//    $cycle++;
//    echo '第'.$cycle.'次循环....';
//    echo '执行时间'.round($t2-$t1,5)."s\n";//生成信息
////    if($cycle%5==0){
////        sleep(2);//每五次休息2秒
////    }
//
//    curl_get($next[0]['next'],$cycle);
}



