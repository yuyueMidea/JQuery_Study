<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/18
 * Time: 下午6:18
 */

//设置允许跨域
header('Access-Control-Allow-Origin:*');

$regname = $_GET["regname"];

class Res {
    public  $status;
    public  $msg;
}

if ($regname == "zhangsan" || $regname == "lisi") {
    $res = new Res();
    $res->status = 0;
    $res->msg = "该用户已经被注册过了，不可以注册";
    echo  json_encode($res);
}
else {
    $res = new Res();
    $res->status = 1;
    $res->msg = "恭喜您，可以注册";
    echo  json_encode($res);
}

//UI: 效果图，切片
//后台： 