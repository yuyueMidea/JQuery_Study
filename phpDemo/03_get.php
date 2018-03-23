<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/19
 * Time: 上午9:23
 */

header("Content-Type:text/html;charset=utf8");

//获取客户端提交过来的参数
$username1 = $_GET["username"];
$pwd1 = $_GET["pwd"];
echo  "用户名：" . $username1 . "<br>";
echo  "密码：" . $pwd1 . "<br>";















