<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>

<?php

//��ȡ����Ϣ
    $user_id = $_POST["username"];
    $pass_id = $_POST["password"];
    $QQ_id = $_POST["QQ"];
    $mail_id = $_POST["E-mail"];
    $phonenumber_id = $_POST["phonenumber"];
    $sex_id = $_POST["sex"];
 /*���ӷ����������ݿ�*/
       
  	$con = mysql_connect("localhost","root","");
  	$mysql_selected = mysql_select_db("phpunion",$con);
    mysql_query("set names  gb2312");
  //���룬����sql����  
   $sql="insert into admin values (' $user_id ','$pass_id','$QQ_id','$mail_id','$phonenumber_id','$sex_id')";
 	 $result = mysql_query($sql,$con) or die("¼����Ϣ����".mysql_error()); 

// ���ɹ�ִ�в�����䣬��ִ�����в�����
   echo "<html><head><meta http-equiv='content-Type' content='text/html;charset = gb2312/'>";
 echo "<script>alert('ע��ɹ���'); window.location.href = 'index-new.php'</script>";
    
 ?>


  </body>
  </html>