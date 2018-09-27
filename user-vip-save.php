<?php 
	$email = $_POST["email"];
	$name = $_POST["name"];
	$password = $_POST["password"];
	$question = $_POST["question"];
	$answer = $_POST["answer"];
	// 如果是录入页面提交, 那么$action等于add
	$action = empty($_POST["action"])?"add":$_POST["action"];
	if ($action=="add") {
		$str1 = "数据添加成功!";
		$str2 = "数据添加失败!";
		$url = "xinwen-fabu.php";
		$sql = "insert into news(标题,肩题,图片,内容,发布时间,userid,columind) value('$biaoti','$jianti','$filename','$neirong','$xwsj','$zuozhe','$lanmu')";
		echo $sql;
	}else if ($action=="update") {
		$str1 = "数据更新成功!";
		$str2 = "数据更新失败!";
		$url = "user-vip.php";
		$kid = $_POST["kid"];
		$sql = "update user set email='{$email}',name='{$name}',password='{$password}',question='{$question}',answer='{$answer}' where id={$kid}";
		// echo $sql;
	}else{
		die("请选择操作方法");
	}
	// echo $kcName;
	// echo $kcTime;

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





