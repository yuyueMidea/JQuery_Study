


// instanceof : 判断某个对象是否是某个构造函数创建的对象
// typeof : 判断数据类型
/*
var d = new Date();
console.log(d instanceof Date);

var arr = new Array();
console.log(arr instanceof Array);
*/

//cookie增删改查
// 添加cookie / 修改cookie
function setCookie(name, value, expires, path){
	var str = encodeURIComponent(name) + "=" + encodeURIComponent(value);
	if (expires && expires instanceof Date) {
		str += ";expires=" + expires;
	}
	if (path) {
		str += ";path=" + path;
	}
	document.cookie = str;
	//console.log(str);  //当前要加入cookie的数据
	//console.log(document.cookie); //浏览器中所有的cookie数据
}

//获取cookie
//user=张三; user2=wangwu; user3=zhaoliu 
function getCookie(name){
	var cookieStr = decodeURIComponent(document.cookie);
	var arr = cookieStr.split("; ");
	for (var i=0; i<arr.length; i++) {
		var str = arr[i]; //user=张三
		var arr2 = str.split("=");
		if (arr2[0] == name){
			return arr2[1];
		}
	}
	return "";
}

//删除cookie
function removeCookie(name){
	var d = new Date();
	d.setDate(d.getDate()-1);
	document.cookie = encodeURIComponent(name) + "=; expires=" +  d;
}

