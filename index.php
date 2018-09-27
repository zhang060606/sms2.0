<?php include("head.php"); ?>
	<div class="sui-layout">
		            <div class="sidebar">
		                          <!-- 左菜单 -->
		            	<?php include("leftmenu.php"); ?>
		            </div>
		            <div class="content">
                                                <p class="sui-text-xxlarge my-padd label-success">欢迎访问学生管理系统！</p>
                                                <div id="new-con">
				
			</div>
		</div>
<?php include("foot.php"); ?>
<script type="text/javascript" src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script type="">
	

    function renderList(datalist){
    	$("#new-con").empty();
		for (var i = 0; i < datalist.length; i++) {
			var $dat = $("<a href='beiwang.php?"+datalist[i].id+"'><div class='news news1'><div class='img'><a href='beiwang.php?cha="+datalist[i].id+"'><img src='"+datalist[i].图片+"'></a></div><h4>"+datalist[i]. 发布时间+" | "+datalist[i].columnid+"</h4><h5><a href='#'>"+datalist[i].标题+"</a></h5><p>"+datalist[i].肩题+"</p></div></a>");
		   	$("#new-con").append($dat);
		  }	
	}

</script>