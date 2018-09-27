<?php
include "conn.php";
// $sql = "select * from student";
// $result = mysqli_query($conn, $sql);
// echo "$result";
?>
<?php include "head.php" ?>
		<div class="sui-layout">
		  <div class="sidebar">
<?php include "leftmenu.php" ?>	  	
		  </div>
		  <div class="content">
			<p class="sui-text-xxlarge my-padd label-success">学生信息管理</p>
			<table class="sui-table table-bordered">
			  <thead>
			    <tr>
			      <th>序号</th>
			      <th>学号</th>
			      <th>姓名</th>
			      <th>性别</th>
			      <th>生日</th>
			      <th>电话</th>		
			      <th>操作</th>
			    </tr>
			  </thead>
			  <tbody id="studentlist">
<!-- 			  	<tr>
	<td>1</td>
	<td>171201</td>
	<td>张三</td>
	<td>男</td>
	<td>1992-08-01</td>
	<td>13717700987</td>
	<td><a class="sui-btn btn-samll btn-warning" href="#">修改</a>&nbsp;&nbsp;<a class="sui-btn btn-samll btn-danger" href="#">删除</a></td>
</tr> -->
			  </tbody>				

			</table>
		  </div>
		</div>		
	</div>
</body>
</html>
<?php include "foot.php"; ?>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/html" id="sss">
	{{each arr val idx}}
		<tr>
			<td>{{val.id}}</td>
			<td>{{val.学号}}</td>
			<td>{{val.班号}}</td>
			<td>{{val.姓名}}</td>
			<td>{{val.性别}}</td>
			<td>{{val.日期}}</td>
			<td>{{val.联系电话}}</td>
      		<td><a class='sui-btn btn-small btn-warning' href='student.update.php?kid={{val.id}}'>修改</a>&nbsp;&nbsp;&nbsp;<a class='sui-btn btn-small btn-danger' href='student-del.php?kid={{val.id}}'>删除</a></td>
		</tr>
</script>
<script>
  $(function(){
    $.ajax({
      url:"api.php",
      type:"POST",
      dataType:"json",
      data:{
        "action":"xuesheng"
      },
      beforeSend:function(XMMLHttpRequest){
        $("#studentlist").html("<tr><td>正在查询,请稍后...</td></tr>")
      },
      success:function(data,textStatus){
        console.log(data.data);
        if (data.code == 200) {
            var str = "";
            for(var i = 0;i < data.data.length;i++){
                console.log(data.data[i]);
                str += "<tr><td>" + data.data[i].Id + "</td><td>" + data.data[i].学号+"</td><td>" + data.data[i].姓名+"</td><td>" + data.data[i].性别+"</td><td>" + data.data[i].日期+"</td><td>" + data.data[i].联系电话+"</td><td><a class='sui-btn btn-small btn-warning' href='student.update.php?kid={{val.id}}'>修改</a>&nbsp;&nbsp;&nbsp;<a class='sui-btn btn-small btn-danger' href='student-del.php?kid={{val.id}}'>删除</a></td></tr>";
            }
              att(data);
            $("#studentlist").html(str);
            console.log(str); 
            // var arr = data.data;
            // var html = template('template1',{"arr":arr});
            // $("tbody").html();
        }
      },
      error:function(XMLHttpRequest,textStatus,errorThrown){
        //请求失败后调用此函数
        console.log("失败原因: "+ errorThrown);
      }
    });
  })
  function att(data){
  for (var i = 0; i < data.data.length; i++) {
    var $trs = $("<tr></tr>");
    for(j in data.data[i]){
      var $tds = "<td>" + data.data[i][j] + "</td>";
      $trs.append($tds);
    }
    $("#studentlist").append($trs);
  }
}
</script>