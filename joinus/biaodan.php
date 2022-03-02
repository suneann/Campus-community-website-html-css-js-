<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

年级:<?php echo $_POST["user_class"]; ?><br>
名字：<?php echo $_POST["user_name"]; ?><br>
专业：<?php echo $_POST["user_profession"]; ?><br>
简介:<?php echo $_POST["user_message"]; ?><br>
第一志愿：<?php echo $_POST["frist1"]; ?><br>
第二志愿：<?php echo $_POST["frist2"]; ?><br>
<a href="index.html">返回</a>
		
<?php			
$mydbhost = "localhost";			
$mydbuser = "root";			
$mydbpass = '168168';
$conn = mysqli_connect($mydbhost, $mydbuser, $mydbpass);
if(! $conn){
die("连接 MySQL 失败:" . mysqli_error($conn));			
}
mysqli_select_db( $conn,"biaodan");		
	
$sql="INSERT INTO biaodan (user_class,user_name,user_profession,user_message,frist1,frist2)	VALUES('$_POST[user_class]','$_POST[user_name]','$_POST[user_profession]','$_POST[user_message]','$_POST[frist1]','$_POST[frist2]')";	
	
$retval = mysqli_query($conn, $sql);
	
if(! $retval){				
die("查找数据库错误" . mysqli_error($conn)); 			
}			
mysqli_close($conn);		
?>
	
	
</body>
</html>
