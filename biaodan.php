<?php
$hostName = 'localhost';
$userName = 'root';
$passWords = '168168';

$conn = mysql_conn($hostName,$userName,$passWords);
if(!$conn){
die('Could not connect: ' . mysql_error());
}
$mysql_select_db('admin',$conn);
$sql="INSERT INTO user_zy (userclass, name, user_profession,user_message,fruit1,fruit2)
VALUES
('$_POST[user_class]','$_POST[user_name]','$_POST[user_profession]','$_POST[user_message]','$_POST[fruit1]',
'$_POST[fruit2]')";

mysql_query($sql,$conn); //这里是添加数据。

//读取数据
$sql = "select * form user_zy where 1"; //读取所有。
$sql = "select * form user_zy where id=".$id; //读取某一项。
$result = mysql_query($sql,$conn);
while($info = mysql_fetch_array($result)){
$arr[] = $info; //$arr 为最后所要读取的值。
}