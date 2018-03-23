<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/19
 * Time: 上午9:34
 */
header("Content-Type:text/html; charset=utf8");

//接收客户端提交过来的参数
$username = $_POST["username"];
$pwd = $_POST["pwd"];

echo  "用户名：" . $username . "<br>";
echo  "密码：" . $pwd . "<br>";

//$_REQUEST: 可以接收GET或POST请求的参数
$username = $_REQUEST["username"];
$pwd =  $_REQUEST["pwd"];
echo  "用户名：" . $username . "<br>";
echo  "密码：" . $pwd . "<br>";

//判断客户端的请求方式
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "get <br>";
}
else if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "post <br>";
}









