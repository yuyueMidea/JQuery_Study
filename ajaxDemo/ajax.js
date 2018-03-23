	
	
	//创建xhr对象
	function createXHR(){
		if(window.XMLHttpRequest){
			return new XMLHttpRequest()
		}
		return new ActiveXObject("Microsoft.XMLHTTP")
	}
	//
	function ajax(obj){
		var xhr = createXHR();
		obj.data = params(obj.data);
		if(obj.type=="get"){
			obj.url +=obj.data.length>0 ?("?"+obj.data) :"";
		}
		xhr.open(obj.type,obj.url,obj.async);
		if(obj.type=="post"){
			xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			xhr.send(obj.data)
		}
		else{
			xhr.send(null)
		}
		
		//异步
		if(obj.async==true){
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4){
					callback();
				}
			}
		}
		
		//同步
		else{callback()}
		
		//接收到服务器数据后调用
		function callback(){
			if(xhr.status==200){
				obj.success(xhr.responseText)
			}
			else{
				var errObj={
					status:xhr.status,
					statusText:xhr.statusText
				}
				obj.failure(errObj);
			}
		}
	}
	
	
	//对参数编码，并且使用&连接
	function params(data){
		var arr=[];
		for(var i in data){
			arr.push(encodeURIComponent(i)+"="+encodeURIComponent(data[i]));
		}
		return arr.join("&");
	}
	//
	
	
				
				
