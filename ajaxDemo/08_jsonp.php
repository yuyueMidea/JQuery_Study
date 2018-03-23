<?php
	
	class Res {
		public $status;
		public $msg;
	}
	$res = new Res();
	$res->status = 1;
	$res->msg = "success";
	
	//接收客户端提交过来的参数（get）
	$fn = $_GET["callback"];  //$fn="fn"
	
	echo $fn."(". json_encode($res) .")";   //fn1({status:1,msg:success})
?>