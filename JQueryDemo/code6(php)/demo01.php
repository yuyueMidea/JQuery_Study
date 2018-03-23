<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31 0031
 * Time: 下午 6:59
 */
header("Content-Type:text/html;charset=utf8");
$conn = new mysqli("127.0.0.1","root",mydb3) or die("连接失败");
$sql = "create table if not exists books2(id int not null auto_increment primary key,name varchar(255),url varchar(255))";
var $result = $conn->query($sql);
if($result){
if($result){
    echo "创建表成功，或表已经存在";
}
else{
    echo "创建表失败";
}
$conn->close();








