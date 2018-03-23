<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/31
 * Time: 下午4:31
 */
//服务器端支持跨域
header('Access-Control-Allow-Origin:*');
header("Content-Type:text/html;charset=utf8");

//接收浏览器端提交过来的参数
$username = $_POST["username"]; //用户名
$password = $_POST["password"]; //密码
$age = $_POST["age"]; //年龄


//类
class  Res{
    public  $status;
    public  $msg;
}

//检测是否有相同用户
$conn = new mysqli("127.0.0.1", "root", "", "mydb5") or die("连接失败");
$sql = "select * from user where username='$username'";
$result = $conn->query($sql);
if ($result && $result->num_rows>0) {
    //说明存在相同用户名
    //echo "用户名已经存在！";
    $res = new Res();
    $res->status = 2;
    $res->msg = "用户名已经存在！";
    echo  json_encode($res);
}
else {
    //说明不存在相同用户名
    //注册
    $sql2 = "insert into user(username,password,age) values('$username', '$password', '$age')";
    $result2 = $conn->query($sql2);
    if ($result2) {
        //echo "注册成功"
        $res = new Res();
        $res->status = 1;
        $res->msg = "注册成功";
        echo  json_encode($res);

    } else {
        //echo "注册失败";
        $res = new Res();
        $res->status = 0;
        $res->msg = "注册失败";
        echo  json_encode($res);
    }
}
$conn->close();













