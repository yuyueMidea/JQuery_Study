<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/31
 * Time: 下午4:52
 */

//服务器端支持跨域
header('Access-Control-Allow-Origin:*');
header("Content-Type:text/html;charset=utf8");

//1,接收浏览器端提交过来的参数
$username = $_POST["username"]; //用户名
$password = $_POST["password"]; //密码

//类
class  Res{
    public  $status;
    public  $msg;
}
//登录
$conn = new mysqli("127.0.0.1", "root", "", "mydb5") or die("连接失败");
$sql = "select * from user where username='$username' and password='$password'";
$result = $conn->query($sql);
if ($result && $result->num_rows>0) {
    //说明登录成功
    $res = new Res();
    $res->status = 1;
    $res->msg = "登录成功！";
    echo  json_encode($res);
}
else {
    //说明登录失败
    $res = new Res();
    $res->status = 0;
    $res->msg = "登录失败！";
    echo  json_encode($res);
}










