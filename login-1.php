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
		die ("�������ݿ������ʧ�ܡ�".mysql_error( ));
	mysql_select_db($db,$conn) or					
		die ("�������ݿ�ʧ�ܡ�".mysql_error( ));
	         mysql_query("set names  gb2312");
		$query="select Username from admin where Username='$username'";
		$ret = mysql_query($query,$conn);
		$row = mysql_fetch_array($ret,MYSQL_BOTH);			       
		if(!empty($row))
		{
			echo("<script type='text/javascript'> alert('��½�ɹ���'); 
			location.href='index-new.php';</script>");
			exit;
		}
		else{
				echo("<script type='text/javascript'> alert('�˺Ż��������1..��'); 
			location.href='login.php';</script>");
			 }
   
	
		
?>