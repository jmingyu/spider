<?php
/**
 * Created by JiangMingyu.
 * User: JiangMingyu
 * E-mail: jmingyu@qq.com
 * Date: 2017/5/20/020
 * Time: 22:56
 */
$t1 = microtime(true);
$pdo = new PDO($GLOBALS['pdo']['host'],$GLOBALS['pdo']['account'],$GLOBALS['pdo']['password']);
$structure = new NotORM_Structure_Convention(
    $GLOBALS['db']['primary'],
    $GLOBALS['db']['foreign'],
    $GLOBALS['db']['table'],
    $GLOBALS['db']['prefix']
);
$GLOBALS['db']=new NotORM($pdo,$structure); //初始化