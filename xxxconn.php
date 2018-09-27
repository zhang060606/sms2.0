<?php
$conn = mysqli_connect("127.0.0.1","root","bjw1712B2@");
//$conn = mysqli_connect("127.0.0.1","root","");
if($conn){
	echo "连接数据库成功";
}else{
	echo "连接失败！".mysqli_error();
}
//2、选择要操作的数据库
mysqli_select_db($conn, "student");
//设置读取数据库的编码，不然有可能显示乱码
mysqli_query($conn, "set names utf8");
?>