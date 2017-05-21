<?php
/**
 * Created by JiangMingyu.
 * User: JiangMingyu
 * E-mail: jmingyu@qq.com
 * Date: 2017/5/20/020
 * Time: 22:10
 */
//伪造随机ip
class fackip{

    public function ip(){
        $one=rand(128,191);
        $two=rand(1,254);
        $three=rand(1,254);
        $four=rand(1,254);
        return $one.".".$two.".".$three.".".$four;
    }

}
