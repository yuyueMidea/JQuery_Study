localStorage.setItem('name','yuyue')
localStorage.getItem('name')  //yuyue
**********************
localStorage.setItem('obj',JSON.stringify({'name':'yuyue','age':'26','married':'no'}))
JSON.parse(localStorage.getItem('obj'))   //{name: "yuyue", age: "26", married: "no"}
**********************
localStorage.removeItem('obj')

JSON序列化,
var book={
  'title': 'professional javascript',
  'author': 'Nicholas',
  'year': 2011
}
var jsonText = JSON.stringify(book, ['title','year'])   //在返回的字符串中，就只会包含'title','year'这两个属性

********************

怎么判断对象类型？

可以通过 Object.prototype.toString.call(xx)。这样我们就可以获得类似 [object Type] 的字符串。
instanceof 可以正确的判断对象的类型，因为内部机制是通过判断对象的原型链中是不是能找到类型的 prototype

********************
经典面试题，循环中使用闭包解决 var 定义函数的问题

for ( var i=1; i<=5; i++) {
	setTimeout( function timer() {
		console.log( i );
	}, i*1000 );
}
复制代码首先因为 setTimeout 是个异步函数，所有会先把循环全部执行完毕，这时候 i 就是 6 了，所以会输出一堆 6。
解决办法两种，第一种使用闭包
for (var i = 1; i <= 5; i++) {
  (function(j) {
    setTimeout(function timer() {
      console.log(j);
    }, j * 1000);
  })(i);
}
复制代码第二种就是使用 setTimeout  的第三个参数
for ( var i=1; i<=5; i++) {
	setTimeout( function timer(j) {
		console.log( j );
	}, i*1000, i);
}
复制代码第三种就是使用 let 定义  i 了
for ( let i=1; i<=5; i++) {
	setTimeout( function timer() {
		console.log( i );
	}, i*1000 );
}

********************

********************

********************
