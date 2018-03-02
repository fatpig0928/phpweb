<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>

<?php

//获取表单信息
    $user_id = $_POST["username"];
    $pass_id = $_POST["password"];
    $QQ_id = $_POST["QQ"];
    $mail_id = $_POST["E-mail"];
    $phonenumber_id = $_POST["phonenumber"];
    $sex_id = $_POST["sex"];
 /*连接服务器，数据库*/
       
  	$con = mysql_connect("localhost","root","");
  	$mysql_selected = mysql_select_db("phpunion",$con);
    mysql_query("set names  gb2312");
  //插入，发送sql请求  
   $sql="insert into admin values (' $user_id ','$pass_id','$QQ_id','$mail_id','$phonenumber_id','$sex_id')";
 	 $result = mysql_query($sql,$con) or die("录入信息出错".mysql_error()); 

// 若成功执行插入语句，则执行下列操作：
   echo "<html><head><meta http-equiv='content-Type' content='text/html;charset = gb2312/'>";
 echo "<script>alert('注册成功！'); window.location.href = 'index-new.php'</script>";
    
 ?>


  </body>
  </html>