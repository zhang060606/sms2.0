<?php 
	// $xuehao = empty($_POST["xuehao"])?"null":$_POST["xuehao"];
	// $kcHao = empty($_POST["kcHao"])?"null":$_POST["kcHao"];
	// $chengji = empty($_POST["chengji"])?"null":$_POST["chengji"];
	$xuehao = $_POST["xuehao"];
	// $kcHao = $_POST["kcHao"];
	$kcHao = empty($_POST["kcHao"])?"null":$_POST["kcHao"];
	$chengji = $_POST["chengji"];

	// 如果是录入页面提交，那么$action等于add
	$action = empty($_POST["action"])?"add":$_POST["action"];
	if ($action == "add") {
		$str1 = "数据添加成功!";
		$str2 = "数据添加失败!";
		$url = "chengji.php";
		$sql = "insert into chengji(学号,课程编号,成绩) value ('$xuehao','$kcHao','$chengji')";
	}else if($action=="update"){
		$str1 = "数据更新成功";
		$str2 = "数据更新失败";
		$url = "chengji-list.php";
		$kid = $_POST["kid"];
		$sql = "update chengji set 学号='{$xuehao}',课程编号='{$kcHao}',成绩='{$chengji}' where id={$kid}";
	}else{
		die("请选择操作方法");
	}
	include("conn.php");

	// 执行SQL语句
	$result = mysqli_query($conn, $sql);

	// 输出数据

	if ($result) {
	echo "<script>alert('{$str1}');</script>";
	header("Refresh:1;url={$url}");
	}else{
	echo $str2.mysqli_error($conn);
	}
	// 关闭数据库
	mysqli_close($conn);
 ?>