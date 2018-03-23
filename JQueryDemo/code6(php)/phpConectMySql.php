<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/31
 * Time: 下午3:52
 */
header("Content-Type:text/html;charset=utf8");

//PHP连接数据库MySql
/*
 * 第一个参数： 所连接的mysql数据库的地址
 * 第二个参数： MySql的用户名
 * 第三个参数： MySql的密码
 * 第四个参数： 指定的数据库名
 * */
//$conn = new mysqli("127.0.0.1","root","", "mydb5") or die("连接失败！");

//创建表
/*
$conn = new mysqli("127.0.0.1","root","", "mydb5") or die("连接失败！");
$sql = "create table if not exists books2(id int not null auto_increment primary key, name varchar(255), url varchar(255))";
$result = $conn->query($sql);
if ($result) {
    echo "创建表成功 或表已存在";
}
else {
    echo "创建表失败";
}
$conn->close(); //关闭数据库
*/

//插入数据
/*
$conn2 = new mysqli("127.0.0.1","root","", "mydb5") or die("连接失败！");
$sql2 = "insert into books2(name,url) values('zhangsan2','aaa')";
$result = $conn2->query($sql2);
if ($result) {
    echo "插入数据成功";
}
else  {
    echo "插入数据失败";
}
$conn2->close();
*/

//查询数据
$conn3 = new mysqli("127.0.0.1","root","", "mydb5") or die("连接失败！");
$sql3 = "select * from books2";
$result = $conn3->query($sql3);
if ($result && $result->num_rows>0){
    while ( $row = $result->fetch_assoc() ) {
        echo "id:" . $row["id"] . ", name:" . $row["name"] . ", url:" . $row["url"] . "<br>";
    }
}
$conn3->close();

//修改数据
//只能使用mysqli_connect()
$conn4 = mysqli_connect("127.0.0.1", "root", "", "mydb5") or die("连接失败");
$sql4 = "update books2 set url='bbb' where name='zhangsan2'";
$result = mysqli_query($conn4, $sql4);
if ($result) {
    echo  "修改成功";
}
else  {
    echo "修改失败";
}
mysqli_close($conn4); //关闭连接

//删除数据
//只能使用mysqli_connect()
$conn5 = mysqli_connect("127.0.0.1", "root", "", "mydb5") or die("连接失败");
$sql5 = "delete from books2 where url='bbb'";
$result = mysqli_query($conn5, $sql5);
if ($result) {
    echo  "删除成功";
}
else  {
    echo "删除失败";
}
mysqli_close($conn5); //关闭连接



