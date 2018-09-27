<?php 
include 'conn.php';
$action=empty($_REQUEST['action'])?"null":$_REQUEST['action'];
$responseArr=array(
	"code"=>200,
	"data"=>null,
	"msg"=>"数据获取成功",
	"count"=>0
	);
switch ($action){

	case $action:
		$sql1="select count(id) as allNum from ".$action;
		$result1 = mysqli_query($conn,$sql1);
		$a = mysqli_fetch_assoc($result1);
		$responseArr['count']=$a['allNum'];

		$pageNum = empty($_REQUEST['pageNum'])?1:$_REQUEST['pageNum'];
		$pageSize = empty($_REQUEST['pageSize'])?4:$_REQUEST['pageSize'];
		if ($action=="news") {
			$sql= "select * from ".$action." order by 发布时间 desc limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
		}else{
			echo $action;
			$sql= "select * from ".$action." limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
		}
		
		$result = mysqli_query($conn, $sql);
		// $sql="select * from ".$action;
		// $result = mysqli_query($conn,$sql);
		if ( mysqli_num_rows($result)>0) {
			$studentlist=array();
			while ($row=mysqli_fetch_assoc($result)){
				$studentlist[]=$row;
			}
			// var_dump($studentlist);
			$responseArr["data"]=$studentlist;
		}else{
			$responseArr["msg"]="暂无记录";
			$responseArr["code"]=207;
		}
		die(json_encode($responseArr));
	break;
	default:
	echo "请输入正确的参数";
	break;
}
mysqli_close($conn);
 ?>
