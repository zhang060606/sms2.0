<!-- 头部开始 -->
<?php include("head.php"); ?>
<?php
include("conn.php");

$sql="select * from  news ";

$result =mysqli_query($conn, $sql);
// 关闭数据库
mysqli_close($conn);
?>
<div class="sui-layout">
      <div class="sidebar">
      <!-- 左菜单 -->
      <?php include("leftmenu.php"); ?>  
      </div>
      <div class="content">
      <p class="sui-text-xxlarge my-padd">新闻管理</p>
      <table class="sui-table table-primary">
                                   <tr>  
                                     <th>id</th>
                                     <th>新闻标题</th>
                                     <th>时间</th>
                                      <th>操作</th>
                                   </tr>
                                  <?php
                                  if(mysqli_num_rows($result)> 0 ){
                                     // 将查询的结果转换为下列数组
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo "<tr>
                                      <td>{$row['id']}</td>
                                      <td>{$row['标题']}</td>
                                      <td>{$row['发布时间']}</td>
                        
                                      <td>
                                            <a  class='sui-btn btn-warning' title=''href='news-update.php?hid={$row['id']}' >修改</a> 
                                              &nbsp; <a class='sui-btn btn-danger' title=''
                                             href='news-save.php?hid={$row['id']}'  >删除</a>
                                      </td>   
                                      </tr>";
                                    }
                                  }else{
                                    echo "没有记录";
                                  }
                                ?>
        </table>
      </div>
    </div>  
<!-- 底部 -->
<?php include("foot.php"); ?>
