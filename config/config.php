<?php

//$GLOBALS['db_config']=[
//    'tables' => [
//        //通用路由
//        '__default__' => [
//            'prefix' => 'item_',
//            'key' => 'id',
//            'map' => [
//                ['db' => 'db_item'],
//            ],
//        ],
//    ],
//    'servers' => [
//        'db_item' => [                               //服务器标记
//            'host'      => '127.0.0.1',             //数据库域名
//            'name'      => 'test',               //数据库名字
//            'user'      => 'root',                  //数据库用户名
//            'password'  => '123456',	                    //数据库密码
//            'port'      => '3306',                  //数据库端口
//            'charset'   => 'UTF8',                  //数据库字符集
//        ],
//    ],
//];
/**
 * $primary = 'id',  //这里告诉notorm 我们的主键都是id 这种英文单词
 * $foreign = '%sid',  //同理，外键都是 外表名+id    这个很重要，否则notorm拼接sql的时候会拼错。
 * $table = '%s',
 * $prefix = 'item_'
 */
$GLOBALS['db']=[
    'primary'=>'id',//这里告诉notorm 我们的主键都是id 这种英文单词
    'foreign'=>'%sid',//同理，外键都是 外表名+id    这个很重要，否则notorm拼接sql的时候会拼错。
    'table'=>'%s',
    'prefix'=>'item_',//表前缀
];
$GLOBALS['pdo']=[
    "host"=>"mysql:host=localhost;dbname=test",
    "account"=>"root",//数据库帐号
    "password"=>"123456"//数据库密码
];
