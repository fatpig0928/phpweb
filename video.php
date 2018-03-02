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
	height:1370px;
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
	height: 150px;
	background:url(images/pages_background.png) no-repeat center top;
	padding-top:20px;
}
#social { 
	float: right;
	margin-right:20px;
	margin-top:40px;
	width:350px;
}
#social img { 
	float: left; 
	margin-left: 25px;
	padding-right:1px;
	
} 
img{
	margin-left:75px;
	padding-top:45px;
}
#site_title { 
	float: left; 
	margin-left:150px;
	width:281px;
	margin-top:5px;
}
#site_title h1 {
	margin: 0;
	padding:0;
	text-align:center;
	display: block;
	font-size: 18px;
	color: #88553a;
}
#main {
	width: 900px;
	padding: 10px 33px 0;
	height:670px;
	background:url(images/main.png) repeat-y;
}
#main_bottom {
	width: 966px;
	height: 143px;
	background:url(images/main_bottom.png) no-repeat;
}
#sidebar { 
	float: left;
	width: 280px;
	margin-top:15px;
	margin-left:15px;
}
#nne {
	margin-bottom: 10px;
}
#nne h3 { 
	padding-bottom: 20px; 
	border-bottom: 1px solid #5f2712;
	color: #62260e; 
	font-weight: bold;
	font-size: 24px; 
	padding:15px;
	margin-left:5px;
}

ul.nne_box { 
	padding: 0; 
	margin: 0; 
	list-style: none;
}
ul.nne_box li { 
	border-left: 5px solid #8e7555; 
	font-family: Georgia, "Times New Roman", Times, serif;
	padding: 0 0 0 20px; 
	margin: 0 0 20px 0;
}
ul.nne_box li span { 
	display: block; 
	color: #850d2f;
	margin-bottom:7px;
}
ul.nne_box li a { 
	color: #8e7555;
	text-decoration:none;
	font-size:14px;
}
ul.nne_box li a:hover{
	text-decoration:underline;

}
#content{
	float:right;
	width:550px;
	margin-top:25px;

}
#video{
	margin-left:12px;
	width:393px;
}
#content h3{
	padding-bottom: 20px; 
	color: #62260e; 
	font-weight: bold;
	font-size: 24px; 
	padding:15px;
	text-align:center;
}
#content p{
	padding-bottom: 20px;  
	font-weight: bold;
	font-size: 15px; 
	text-align:center;

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
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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
          <li><a href="index-new.php" >首页</a></li>
          <li><a href="">php技术</a></li>
          <li><a href="">视频教程</a></li>
          <li><a href="">论坛</a></li>
		  <li><a href="">联系我们</a></li>
        </ul>
	</div>
  <div id="pages">
    <div id="social">
    	<img src="images/pages_1.png" width="68" height="42" />
    	<img src="images/pages_2.png" width="68" height="42" />
    	<img src="images/pages_3.png" width="68" height="42" /></div>
    <img src="images/pages_4.png" width="454" height="69" />
    <div id="site_title"><h1>最专业的的php学习网站</h1></div>
  </div>
  <div id="main">
	<div id="sidebar">
		<div id="nne">
      		<h3>热门教学视频</h3><hr>
            &nbsp;
            <ul class="nne_box">
          		  <li><a href="#">视频教程1：环境配置与代码调试</a>
                  <span>&nbsp;&nbsp;2013/08/30</span></li>
          		  <li><a href="#">[PHP基础]2014-PHP100网络视频-html第一讲</a>
                  <span>&nbsp;&nbsp;2014/06/09</span></li>
           		  <li><a href="#">［第75讲］微信公共平台 - 开放接口PHP机器人开发（1）</a>
                  <span>&nbsp;&nbsp;2014/09/06</span></li>
                  <li><a href="#">[PHP基础]2014-PHP网络视频-html第五讲</a>
                  <span>&nbsp;&nbsp;2014/06/20</span></li>
                  <li><a href="#">［第01讲］开启PHP学习之路，融入新互联网时代</a>
                  <span>&nbsp;&nbsp;2013/09/06</span></li>
                  <li><a href="#">［第02讲］PHP5.4 Apache Mysql 搭配与多站点配置详解</a>
                  <span>&nbsp;&nbsp;2013/09/06</span></li>
                  <li><a href="#">［第34讲］PHP5中Cookie与 Session详解</a>
                  <span>&nbsp;&nbsp;2013/10/23</span></li>
            </ul>
      	</div><!-- end of nne -->
      
  	</div>   <!-- end of sidebar -->
    <div id="content">
      		<h3>删除数据库</h3>
            <p>发布人：张华   时间：2015-09-05 23:48:31   浏览数：142416</p>
      <div id="video"> 
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="530" height="393" id="FLVPlayer">
          <param name="movie" value="FLVPlayer_Progressive.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="scale" value="noscale" />
          <param name="salign" value="lt" />
          <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_3&amp;streamName=%E6%80%BB%E8%A7%86%E9%A2%91%7E1&amp;autoPlay=false&amp;autoRewind=false" />
          <param name="swfversion" value="8,0,0,0" />
          <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="530" height="393">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="scale" value="noscale" />
            <param name="salign" value="lt" />
            <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_3&amp;streamName=%E6%80%BB%E8%A7%86%E9%A2%91%7E1&amp;autoPlay=false&amp;autoRewind=false" />
            <param name="swfversion" value="8,0,0,0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
            <div>
              <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>
    </div>
</div>  
  <!-- end of main -->
 
  <div id="main_bottom"></div>
  <div id="footer">
      <p>Copyright&nbsp;&nbsp;2015-2018&nbsp;&nbsp;Powered&nbsp;&nbsp;By&nbsp;&nbsp;YN  </p>
  </div>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FLVPlayer");
swfobject.registerObject("FLVPlayer");
//-->
</script>
</body>
</html>
