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

$pdo = new PDO("mysql:host=localhost;dbname=test","root","123456");
$structure = new NotORM_Structure_Convention(
    $primary = 'id',  //这里告诉notorm 我们的主键都是id 这种英文单词
    $foreign = '%sid',  //同理，外键都是 外表名+id    这个很重要，否则notorm拼接sql的时候会拼错。
    $table = '%s',
    $prefix = 'item_'
);
$db=new NotORM($pdo,$structure); //初始化
//var_dump($db->anjuke_zu()->insert($array));
//curl_get("http://hz.zu.anjuke.com/fangyuan/p1/");
curl_get(null,$db);
function curl_get($url,$db)
{
//    $refer = "http://hz.zu.anjuke.com";
//    $header[] = "Cookie: " . "appver=1.5.0.75771;";
//    $agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36";
//    $ch = curl_init();
//    $timeout = 5;
//    curl_setopt($ch, CURLOPT_USERAGENT,$agent);
//    curl_setopt ($ch, CURLOPT_URL, $url);
//    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//    $file_contents = curl_exec($ch);
//    curl_close($ch);
//    $rules = array(
//        //采集id为one这个元素里面的纯文本内容
//        'title' => array('.zu-info>h3>a','title'),
//        'type'  => array('.zu-info>.tag','text'),
//        'price'  => array('.zu-side','text'),
//        'local'  => array('.zu-info>address','text'),
//        'link'   => array('.zu-info>h3>a','href'),
//    );
//    $query=new \QL\QueryList();
//    $data = $query->Query($file_contents,$rules)->data;
    var_dump($db->anjuke_zu()->fetch());

//打印结果
//    print_r($data);
}



