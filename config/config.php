<?php

$GLOBALS['db_config']=[
    'tables' => [
        //通用路由
        '__default__' => [
            'prefix' => 'item_',
            'key' => 'id',
            'map' => [
                ['db' => 'db_item'],
            ],
        ],
    ],
    'servers' => [
        'db_item' => [                               //服务器标记
            'host'      => '127.0.0.1',             //数据库域名
            'name'      => 'test',               //数据库名字
            'user'      => 'root',                  //数据库用户名
            'password'  => '123456',	                    //数据库密码
            'port'      => '3306',                  //数据库端口
            'charset'   => 'UTF8',                  //数据库字符集
        ],
    ],
];
