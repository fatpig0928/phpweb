<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background-color:#000;
}
#wrapper{
	width:966px;
	height:790px;
	margin:0 auto; 
	padding:0px;

}
.bg_top { 
	position: absolute; 
	top: 0; 
	left: 73px;
	width: 1200px;
	height: 570px;
	z-index: -1000 ;
	background:url(images/bg_top.png) no-repeat;
}

.bg_bottom { 
	position: absolute; 
	bottom: 0; 
	left: 73px; 
	width: 1200px; 
	height: 270px;
	z-index: -1200;
	background:url(images/bg_bottom.png) no-repeat;
}
#header{
	height:63px;
	padding-top:12px;
	padding-left:25px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight:bold;
}
#header h1{
	font-size:36px;
	color:#999;
}
#header p{
	color:#999;
	font-size:18px;
}
#menu {
	float: right;
	width: 966px;
	height: 75px;
	margin-top:6px;
	margin-bottom: 20px;
	background:url(images/menu.png) no-repeat;
}

#menu ul {
	margin: 0;
	padding: 0 40px;
	list-style: none;
}

#menu ul li {
	padding: 0;
	margin: 0;
	display: block;
	float: left;
	width: 164px;
	height: 75px;
	background:url(images/menu_divider.png) center right no-repeat;
}

#menu ul li a {
	float: left;
	display: block;
	width: 160px;
	height: 75px;
	line-height: 75px;
	padding-right: 4px;
	font-size: 16px;
	font-style:normal;
	color: #62260e;
	text-align: center;
	text-decoration: none;
	font-weight: 700;
	border: none;	
}
#menu ul li a:hover{
	background:url(images/menu_hover.png) center center no-repeat;
}
#pages {
	clear: both;
	width: 966px;
	height: 95px;
	background:url(images/pages_background.png) no-repeat center top;
	padding-top:20px;
}
#register{
	background:url(images/main_top.png);
	height:400px;
	
}
#login {
	width: 230px;
	height: 300px;
	padding: 25px;
	margin-left:343px;

}
#login h3 {
	color: #494847;
	font-size:30px;
	padding-bottom: 15px;
	margin-bottom: 15px;
	border-bottom: 1px solid #b6aa99;
}
#login label {
	float: left;
	width: 80px;
	color: #62260e;
	font-size:16px;
	margin-top:7px;
	margin-left:7px;
	
}
#login .txt_field {
	display: block;
	height: 29px;
	width: 132px;
	color: #000;
	font-size: 12px;
	padding: 0 3px;
	font-variant: normal;
	line-height: normal;
	line-height: 30px;
	background:url(images/txtfield.png) no-repeat ;
	margin-bottom:8px;
	border:none;
}
#login .sub{
	float: right;
	display: block;
 	height: 42px;
	width: 97px;
	font-size: 12px;
	color: #000;
	border: none;
	background:url(images/sub-1.png) no-repeat;
	margin-top:15px;
	margin-right:70px;

}
#register_bottom{
	width: 966px;
	height: 143px;
	background:url(images/main_bottom.png) no-repeat;
}

#footer{
	clear: both;
	width: 900px;
	color: #999494;
	text-align: center;
	color: #999494;
	font-size:18px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
</style>

</head>



<body>
<div id="wrapper">
  <span class="bg_top"></span>
  <span class="bg_bottom"></span>
  <div id="header">
    	<h1>PHP联盟</h1>
        <p>www.PHPunion.com</p>   </div>
  <div id="menu">
        <ul>
          <li><a href="" >首页</a></li>
          <li><a href="">php技术</a></li>
          <li><a href="">视频教程</a></li>
          <li><a href="">论坛</a></li>
		  <li><a href="">联系我们</a></li>
        </ul>
  </div>
  <div id="pages">
  </div>
  <div id="register">
<div id="login">
    <h3>注册会员</h3>
   		<form action="reregister-1.php" method="post">
             		  <label>登录名:</label>
             		  <input name="username"  class="txt_field"  type="text" size="10" maxlength="30" />
             		  <label>密码:</label>
             		  <input name="password"  class="txt_field"  type="password" size="10" maxlength="30" />
                      <label>QQ:</label>
             		  <input name="QQ"  class="txt_field"  type="QQ" size="10" maxlength="30" />
                      <label>E-mail:</label>
             		  <input name="E-mail"  class="txt_field"  type="E-mail" size="10" maxlength="30" />
                      <label>手机号:</label>
             		  <input name="phonenumber"  class="txt_field"  type="text" size="10" maxlength="30" />
                      <label>性别:</label>
                      <input type="radio" name="sex" id="sex" value="man" checked="checked" />  男
                      <input type="radio" name="sex" id="sex" value="woman" /> 女
                      <input type="radio" name="sex" id="sex" value="unknow" />保密
                      
                      <input name="提交" type="submit" value="" class="sub" />



   		</form>
  </div>
 </div><!-- end of register -->
  <div id="register_bottom"></div>
  <div id="footer">
      <p>Copyright&nbsp;&nbsp;2015-2018&nbsp;&nbsp;Powered&nbsp;&nbsp;By&nbsp;&nbsp;YN  </p>
  </div>
</div><!-- end of wrapper -->

</body>
</html>
