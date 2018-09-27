<?php 
session_start(); 
//检测session是否为空，是则跳转到登录页
if( empty($_SESSION['usname']) ){
	header("Refresh:0;url=login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>班级信息录入</title>
	<link rel="stylesheet" type="text/css" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui.min.css">
	<link rel="stylesheet" type="text/css" href="http://g.alicdn.com/sj/dpl/1.5.1/css/sui-append.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">	
<style type="text/css">
	.userinfo{
		position: absolute;
		width: 200px;
		height: 25px;
		line-height: 25px;
		bottom: 0;
		right: 0;
		font-size: 12px;
	}
	.userinfo span{
		color: red;
	}

	

	#new-con .news{
	    width:400px;
	    float: left;
	    margin-left: 50px;
	}
	#new-con .news .img{
	    border-bottom: 6px solid #f6921e;
	    width: 400px;
	    height: 400px;
	    margin-bottom: 25px;
	    margin: 0 auto 12px;
	}
	.news .img img{
	    width: 400px;
	    height: 400px;
	}
	.news h4{
	    font-size: 14px;
	        color: #f7931e;
	}
	.news h5{
	    overflow: hidden;
	}
	.news h5 a{
	    color: #3e3a39;
	    padding:5px 0;
	    overflow: hidden;；
	}
	.news h5 a:hover{
	    color:#bd0a01;
	    text-decoration:underline;
	}
	.news p{
	    font-size: 12px;
	    color: #b3b3b3;
	    height: 80px;
	    line-height: 20px;
	}
	#aa{
		display: none;
		margin:0 auto;
	}


</style>
</head>
<body>
	<div class="sui-container">
		<div class="my-head">北京网络职业学院学生管理系统
			<div class="userinfo">欢迎<span><?php echo $_SESSION['usname']; ?></span>登录&nbsp;&nbsp;<a href="login-out.php">退出</a></div>
		</div>