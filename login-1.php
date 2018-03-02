<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
$username=@$_POST['username'];
$password=@$_POST['password'];
   

	$host="localhost";							
	$user="root";									
	$password="";
 	$db="phpunion";
	$table_name="admin";					
	$conn=mysql_connect($host,$user,$password) or	
		die ("连接数据库服务器失败。".mysql_error( ));
	mysql_select_db($db,$conn) or					
		die ("连接数据库失败。".mysql_error( ));
	         mysql_query("set names  gb2312");
		$query="select Username from admin where Username='$username'";
		$ret = mysql_query($query,$conn);
		$row = mysql_fetch_array($ret,MYSQL_BOTH);			       
		if(!empty($row))
		{
			echo("<script type='text/javascript'> alert('登陆成功！'); 
			location.href='index-new.php';</script>");
			exit;
		}
		else{
				echo("<script type='text/javascript'> alert('账号或密码错误1..！'); 
			location.href='login.php';</script>");
			 }
   
	
		
?>