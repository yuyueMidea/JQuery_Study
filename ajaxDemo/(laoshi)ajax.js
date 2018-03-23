

//创建xhr对象
function createXHR(){
	if (window.XMLHttpRequest){
		return new XMLHttpRequest();
	}
	return new ActiveXObject("Microsoft.XMLHTTP");
}


/*
	ajax({
		type:"get",
		url: "http://60.205.181.47/myPHPCode2/checkname.php",
		data: {regname:"zhangsan",pwd:"123456"},
		//async: true,
		
		success: function(){
			console.log("success");
		},
		error: function(){
			console.log("error");
		}
	});
*/
//
function ajax(obj){
	
	obj.type = obj.type || "get"; //默认是get请求方式
	obj.async = obj.async==undefined ? true : obj.async; //默认是true，默认是异步 
	
	//1, xhr
	var xhr = createXHR();
	
	//2, open
	var params = getParamStr(obj.data); //{regname:"zhangsan",pwd:"123456"} => regname=zhangsan&pwd=123456
	if (obj.type.toLowerCase() == "get"){
		obj.url += params.length==0 ? "" : ("?" + params);
	}
	xhr.open(obj.type, obj.url, obj.async);
	
	//3,send
	if (obj.type.toLowerCase() == "get"){
		xhr.send(null);
	}
	else if (obj.type.toLowerCase() == "post") {
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.send(params);
	}
	
	//4, 接收数据
	if (obj.async) { //异步
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4){
				callback();
			}
		}
	}
	else { //同步
		callback();
	}
	
	function callback(){
		if (xhr.status == 200) {
			
			//成功后的回调
			if (obj.success)
				obj.success(xhr.responseText);
			
		}
		else {
			//失败后的回调
			if (obj.error)
				obj.error(xhr.status);
		}
	}
	
}

//{regname:"zhangsan",pwd:"123456"} => regname=zhangsan&pwd=123456
function getParamStr(obj){
	var arr = [];
	for (var key in obj){
		var str = key + "=" + obj[key];
		arr.push(str);
	}
	return arr.join("&");
}



