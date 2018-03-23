<?php
/**
 * Created by PhpStorm.
 * User: ijeff
 * Date: 17/7/19
 * Time: 上午8:39
 */
//PHP语法
//JS语法:  变量， 数据类型， 运算符， if，switch， for,while,do-while, 字符串string, 数组Array, 函数function, 对象Object,...

//PHP基本语法
//变量
$a = 10;
$b = 20;
$c = $a + $b;
echo $c;


//数据类型
//boolean
//数值类型
//String
//数组
//Null
//对象

//Bool
$a = true; //false
var_dump($a); //boolean true

//数值
$b = 10;
var_dump($b); //int 10
$c = 10.1;
var_dump($c); //float 10.1

//字符串
$str = "hello world";
var_dump($str); //string 'hello world' (length=11)
$name = "张三";
var_dump($name); //string '张三' (length=6)

$str = "hello world";
echo $str . " length:" . strlen($str); //字符串长度
echo $str . "length:" . strlen(str)
//数组
$arr = array(1,2,3,"4");
var_dump($arr);
/*
array
  0 => int 1
  1 => int 2
  2 => int 3
  3 => string '4' (length=1)
*/
echo  count($arr); //4， 数组长度
echo "<br>"; //识别html标签

echo $arr[0] . "<br>";
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";
echo $arr[3] . "<br>";

for ($i=0; $i<count($arr); $i++){
    echo $arr[$i];
}
echo "<br>";

$arr = array(3,4,2,6,5,1,11);
sort($arr); //升序排序
print_r($arr);
echo "<br>";

//关联数组
$arr = array("aa"=>10, "bb"=>20, "cc"=>30);
echo  $arr["aa"] . "<br>";
echo  $arr["bb"] . "<br>";

//Null
$n = null;
var_dump($n); //null

//对象
//类
class Person{
    public $name;
    public $age;
}
$person = new Person();
$person->name = "张三";
$person->age = 33;
echo $person->name . $person->age;
echo "<br>";

//json解析，json序列化
//json解码，json编码

//json编码
$str = json_encode($person);
echo $str . "<br>";

//json解码
$str = '{"name":"lisi","age":44}';
$obj = json_decode($str);
print_r($obj);



