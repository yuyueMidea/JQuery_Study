

//获取obj元素的attr样式属性值
function getStyleAttr(obj, attr){
	if (window.getComputedStyle) { //IE9+，非IE
		return window.getComputedStyle(obj, null)[attr];
	}
	return obj.currentStyle[attr]; //IE8-
}
		

//封装缓冲运动
/*
function move(obj, attr, iTarget, fn){
	
	clearInterval(obj.timer);
	obj.timer = setInterval(function(){
		
		//1,current
		var current = 0;
		if (attr == "opacity") { //透明度
			current = Math.round(getStyleAttr(obj, attr)*100);
		}
		else { //left,top,width,height
			current = parseFloat(getStyleAttr(obj, attr));
			current = Math.round(current);
		}
		
		//2,speed
		var speed = (iTarget-current)/8;
		speed = speed>0 ? Math.ceil(speed) : Math.floor(speed);
		
		//3,临界值
		if (current == iTarget) {
			clearInterval(obj.timer); //停止运动
			
			//回调
			if (fn)	fn();
			
			return;
		}
		
		//4,运动
		if (attr == "opacity") { //透明度
			obj.style[attr] = (current + speed)/100;
			obj.style.filter = "alpha(opacity=" + (current+speed) + ")";
		}
		else  { //left,top,width,height
			obj.style[attr] = current + speed + "px";
		}
		
	}, 30);
	
}
*/



//封装缓冲运动
//animate(obox, {left:200, top:200, width:300, height:300});
//obj: 需要修改的元素节点
//json: 需要修改的样式属性{left:200, top:200, width:300, height:300}
//fn: 运动结束后的回调函数
function animate(obj, json, fn){
		
	clearInterval(obj.timer);
	obj.timer = setInterval(function(){
		
		var bStop = true; //是否可以停止定时器（是否所有属性都到达了目标值）
		
		for (var attr in json) {
			var iTarget = json[attr];
			//attr: 属性名称
			//iTarget: 目标值
			
			//1,current
			var current = 0;
			if (attr == "opacity") { //透明度
				current = Math.round(getStyleAttr(obj, attr)*100);
			}
			else { //left,top,width,height
				current = parseFloat(getStyleAttr(obj, attr));
				current = Math.round(current);
			}
			
			//2,speed
			var speed = (iTarget-current)/8;
			speed = speed>0 ? Math.ceil(speed) : Math.floor(speed);
			
			//3,临界值
			if (current != iTarget) {
				bStop = false; //说明至少有一个属性未到达目标值，不能停止
			}
			
			//4,运动
			if (attr == "opacity") { //透明度
				obj.style[attr] = (current + speed)/100;
				obj.style.filter = "alpha(opacity=" + (current+speed) + ")";
			}
			else  { //left,top,width,height
				obj.style[attr] = current + speed + "px";
			}
		}
		
		if (bStop) {
			clearInterval(obj.timer); //停止运动
			
			//回调
			if (fn)	fn();
		}
		
	}, 30);
	
}




