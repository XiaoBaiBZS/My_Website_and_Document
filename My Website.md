```html
<!doctype html>

<html> 

	<head> 

		<meta charset="UTF-8"> 

		<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1"> 

		<link rel="shortcut icon" href="https://s6.jpg.cm/2022/09/25/Pbysch.jpg" type="image/x-icon"> 

		<title>Hello,I'm BZS.</title> 

		<style>a{text-decoration: none;}</style> 

	</head> 

	<body> 

    <script>

    function getStyle(obj, attr) {

 if (window.getComputedStyle) {

 return window.getComputedStyle(obj)[attr];

 } else {

 return obj.currentStyle[attr];

 }

}

function bufferMove(obj, json, fn) {

 let speed = 0;

 clearInterval(obj.timer);

 obj.timer = setInterval(function () {

 var flag = true;

 for (var attr in json) {

  var currentValue = null;

  if (attr === 'opacity') {

  currentValue = Math.round(getStyle(obj, attr) * 100);

  } else {

  currentValue = parseInt(getStyle(obj, attr));

  }

  speed = (json[attr] - currentValue) / 10;

  speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);

 

  if (currentValue !== json[attr]) {

  if (attr === 'opacity') {

   obj.style.opacity = (currentValue + speed) / 100;

   obj.style.filter = 'alpha(opacity=' + (currentValue + speed) + ')';//IE

  } else {

   obj.style[attr] = currentValue + speed + 'px';

  }

  flag = false;

  }

 }

 if (flag) {

  clearInterval(obj.timer);

  fn && typeof fn === 'function' && fn();

 }

 }, 10);

}

    </script>

 <script>

 

 class Firework {

  constructor(x, y) {//x,y鼠标的位置

  this.x = x;//将水平位置赋值给this.x属性。

  this.y = y;//将垂直位置赋值给this.y属性。

  this.ch = document.documentElement.clientHeight;//可视区的高度

  }

  init() {

  //1.创建烟花节点。

  this.firebox = document.createElement('div');

  this.firebox.style.cssText = `width:5px;height:5px;background:#fff;position:absolute;left:${this.x}px;top:${this.ch}px;`;

  document.body.appendChild(this.firebox);

  this.firemove();//创建完成，直接运动。

  }

  //2.烟花节点运动

  firemove() {

  bufferMove(this.firebox, { top: this.y }, () => {

   document.body.removeChild(this.firebox);

   //当烟花节点消失的时候，创建烟花碎片

   this.createfires()

  });

  }

  //3.当前鼠标点击的位置，随机产生30-60个盒子。(随机颜色)

  createfires() {

  for (let i = 1; i <= this.rannum(30, 60); i++) {

   this.fires = document.createElement('div');

   this.fires.style.cssText = `width:5px;height:5px;background:rgb(${this.rannum(0, 255)},${this.rannum(0, 255)},${this.rannum(0, 255)});position:absolute;left:${this.x}px;top:${this.y}px;`;

   document.body.appendChild(this.fires);

   this.fireboom(this.fires);//设计成一个一个运动，等到循环结束，出现整体结果。

  }

  }

  //4.烟花碎片运动。

  fireboom(obj) {

  //存储当前obj的初始值。

  let initx = this.x;

  let inity = this.y;

 

  //随机产生速度(水平和垂直方向都是随机的,符号也是随机的)。

  let speedx = parseInt((Math.random() > 0.5 ? '-' : '') + this.rannum(1, 15));

  let speedy = parseInt((Math.random() > 0.5 ? '-' : '') + this.rannum(1, 15));

 

  obj.timer = setInterval(() => {

   initx += speedx;

   inity += speedy++; //模拟重力加速度(垂直方向比水平方向快一些)

   if (inity >= this.ch) {

   document.body.removeChild(obj);

   clearInterval(obj.timer);

   }

   obj.style.left = initx + 'px';

   obj.style.top = inity + 'px';

  }, 1000 / 60);

 

  }

  //随机区间数

  rannum(min, max) {

  return Math.round(Math.random() * (max - min) + min);

  }

 }

 

 

 document.onclick = function (ev) {

  var ev = ev || window.event;

  //ev.clientX,ev.clientY//获取的鼠标的位置

  new Firework(ev.clientX, ev.clientY).init();

 }

 </script>

		<style>#div1{

		  width: 15px; 

	  height:10px;

	  border: 1px ;

	 background-color:white;

	  border-radius: 30px;

	 

	  }</style> 

		<style>#div3{

	

	

	  height: 250px;

	   width: 100%; 

	  border: 1px ;

	 background-color:#0033FF;

	  border-radius: 10px;

	 

	  }</style> 

		<style>#div2{

	

	

	  height: 250px;

	   width: 100%; 

	  border: 1px ;

	 background-color:white;

	  border-radius: 5px;

	 

	  }</style> 

		<style>#div4{

	

	

	  

	   width: 100%; 

	  border: 1px ;

	 background-color:white;

    F1F1F1

	  border-radius: 20px;

	 overflow:hidden;

	  }</style> 

		<img src="https://s6.jpg.cm/2022/09/25/PbyUi4.png" width="100%"> 

		<div align="center"> 

			<img src="https://s6.jpg.cm/2022/09/25/Pbysch.jpg" width="100px"> 

			<h1>你好呀!</h1> 

			<h1>我是小白BZS~</h1> 

         	<h5 style="color:#BFBFBF;">（轻触空白处放烟花）</h5> 

			<h3 style="color:gray;">通过以下社交媒体联系我</h3> 

			<br> 

			<div>   <a href="https://s6.jpg.cm/2022/09/25/Pbytn6.jpg"><img id="wx" style="margin-left:10px;" src="https://s6.jpg.cm/2022/09/25/PbyHhp.png" width="50px"> </a> 

      <a href="https://qm.qq.com/cgi-bin/qm/qr?k=nzQscbxFMrP64RmAB9EYc-ImDs99oTHD&noverify=0" target="_blank"> <img id="qq" style="margin-left:10px;" src="https://s6.jpg.cm/2022/09/25/Pby1sD.png" width="50px"></a>

              <a href="https://h5.dingtalk.com/zproject/profile.html?fr_source=13&profile=%40kgDOG1EaFg&cardToken=02341d5f30"><img id="钉钉" src="https://s6.jpg.cm/2022/09/25/PbyEwS.png" width="50" style="margin-left:10px;"> </a> 

         <a href="https://weibo.com/u/6393209707"> <img id="微博" style="margin-left:10px;" src="https://s6.jpg.cm/2022/09/25/PbyNJT.png" width="50px"> </a> 

         <a href="https://b23.tv/NkMkQEU"> <img id="bili" src="https://s6.jpg.cm/2022/09/25/PbypEH.png" width="50" style="margin-left:10px;"> </a> 

          <a href="http://www.coolapk.com/u/3543373"> <img id="coolapk" src="https://s6.jpg.cm/2022/09/25/Pbyml2.png" width="50" style="margin-left:10px;"> </a>

           <a href="https://github.com/XiaoBaiBZS"> <img id="github" src="https://s6.jpg.cm/2022/09/25/PbyvjL.png" width="50" style="margin-left:10px;"> </a> 

	   	</div> 

			<div align="center" id="kkk"> 

				<h3 style="color:gray;">这些是可以联系到我的电子邮箱</h3> 

				<h5 style="color:#BFBFBF;">(轻触就可以跳转邮箱应用哦)</h5> 

				<div id="div4"> 

					<br> 

					<h2 id="yxqq">QQ Mail（QQ邮箱）</h2> 

					<h3 id="yxqq2" style="color:#5A5A5A;">1298589907@qq.com</h3> 

					<br> 

					<h2 id="yxdd">Ding Mail（钉邮）</h2> 

					<h3 id="yxdd2" style="color:#5A5A5A;">bzs1298589907@dingtalk.com</h3> 

					<br> 

					<h2 id="yxot">Outlook（微软展望）</h2> 

					<h3 id="yxot2" style="color:#5A5A5A;">a1298589907@outlook.com</h3> 

				<br> 

					<h2 id="yxpt">Petalmail（花瓣邮箱）</h2> 

					<h3 id="yxpt2" style="color:#5A5A5A;">xiaobaibzs@petalmail.com</h3> 

				<br> 

					<h2 id="yxgm">Gmail（谷歌邮箱）</h2> 

					<h3 id="yxgm2" style="color:#5A5A5A;">bzs1298589907@gmail.com</h3> 

			<br> 

					<h2 id="yxex">Office365 Exchange</h2> 

					<h3 id="yxex2" style="color:#5A5A5A;">1298589907@supercute.onmicrosoft.com</h3> 

			

   	</div> 

			</div> 

			<div style="display:none;"> <a id="hyxqq" href="mailto:1298589907@qq.com?subject=通过QQ邮箱和我联系&cc=sample@hotmail.com&body=您好，我是">send qqmail</a> <a id="hyxdd" href="mailto:bzs1298589907@dingtalk.com?subject=通过钉邮和我联系&cc=sample@hotmail.com&body=您好，我是">send qqmail</a> <a id="hyxot" href="mailto:a1298589907@outlook.com?subject=通过 Microsoft Outlook 和我联系&cc=sample@hotmail.com&body=您好，我是">send qqmail</a> 

		<a id="hyxpt" href="mailto:xiaobaibzs@petalmail.com?subject=通过HUAWEI Petalmail邮箱和我联系&cc=sample@hotmail.com&body=您好，我是">send qqmail</a>

   <a id="hyxgm" href="mailto:1298589907@qq.com?subject=通过Google Gmail邮箱和我联系&cc=sample@hotmail.com&body=建议您转至QQ邮箱1298589907@qq.com，因为使用 GMS 服务需要 VPN 网络连接，对方可能无法收取您的消息。">send qqmail</a>

   <a id="hyxex" href="mailto:1298589907@supercute.onmicrosoft.com?subject=通过Microsoft office365 Exchange邮箱和我联系&cc=sample@hotmail.com&body=建议您转至QQ邮箱1298589907@qq.com，因为对方可能无法收取您的消息。">send qqmail</a>

 

   	</div> 

			<br> 

         <div> <div><hr/><h3 >优质图文</h3></div>

         <a href="https://www.coolapk.com/feed/38887354?shareKey=YTQwMWU1YzNiM2E2NjMzMDQ2NzA~&shareUid=3543373&shareFrom=com.coolapk.market_12.5.0-beta2" target="_blank"> <img id="1" style="margin-left:0px;" src="https://s1.ax1x.com/2022/09/26/xVmeyD.png" width="100%"></a>

         

         <a href="https://www.coolapk.com/feed/34633537?shareKey=NWIzMGM3MjEwYTQ3NjMzMDQ2NzA~&shareUid=3543373&shareFrom=com.coolapk.market_12.5.0-beta2" target="_blank"> <img id="2" style="margin-left:0px;" src="http://wp.wadg.pro/view.php/3ff99ea38267a89a38d89caa0a3948dc.png" width="100%"></a>

         

         <a href="https://www.coolapk.com/feed/34564165?shareKey=ODU5Y2E4ZDJiMWFhNjMzMDQ2NzA~&shareUid=3543373&shareFrom=com.coolapk.market_12.5.0-beta2" target="_blank"> <img id="3" style="margin-left:0px;" src="http://wp.wadg.pro/view.php/093237d6e60005ce09375544500ce64d.png" width="100%"></a>

      

      

      <!-- <a href="酷安链接" target="_blank"> <img id="3" style="margin-left:0px;" src="宣传图床" width="100%"></a> -->

      

         </div>

<div><hr/><h3 >友情链接</h3>

<a href="https://wds.ecsxs.com/220772.html"><h5 style="color:gray;">多文言Duo</h5></div></a>

<h4>Copyright ©2021-2022 XiaoBaiBZS</h4>

</div>

		</div> 

		<script type="text/javascript">

			yxqq.onclick = function(){

				hyxqq.click();

			}

			yxqq2.onclick = function(){

				hyxqq.click();

			}

			yxdd.onclick = function(){

				hyxdd.click();

			}

			yxdd2.onclick = function(){

				hyxdd.click();

			}

			yxot.onclick = function(){

				hyxot.click();

			}

			yxot2.onclick = function(){

				hyxot.click();

			}

      yxpt.onclick = function(){

				hyxpt.click();

			}

			yxpt2.onclick = function(){

				hyxpt.click();

			}

      yxgm.onclick = function(){

				hyxgm.click();

			}

			yxgm2.onclick = function(){

				hyxgm.click();

			}

      yxex.onclick = function(){

				hyxex.click();

			}

			yxex2.onclick = function(){

				hyxex.click();

			}

		</script>  

	</body>

</html>
```
