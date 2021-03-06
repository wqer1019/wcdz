<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <!-- 时间选择组件 css -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/Datepicker/css/bootstrap-datetimepicker.min.css">
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/main.css">
  </head>
  
  <body>
  
  	<div class="topbar">
    	 <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/wcdz/admin.php/Center/index">
			<i class="fa fa-home fa-lg"></i>
			控制中心
			</a>
		</li>
	</ul> 
</div><!-- /.mbx -->
        
        
        <div class="topbar-search">
        	<form class="form-inline" role="form">
            	<div class="form-group">
            		<label class="sr-only" for="exampleInputEmail2">Email address</label>
            		<input type="email" class="form-control input-sm" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
         <div class="page-header col-sm-12">
        	<h1>管理内容</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="/wcdz/admin.php/Content/index/classid/<?php echo ($classid); ?>">文章列表</a>
					</li>
					
					<li>
						<a href="/wcdz/admin.php/Content/check/classid/<?php echo ($classid); ?>">待审核文章</a>
					</li>
					
					<li>
						<a href="/wcdz/admin.php/Content/restore/classid/<?php echo ($classid); ?>">回收站文章</a>
					</li>
                    
				</ul>
				
				<div class="tab-content">
					<div  class="tab-pane in active">
                    <p class="title background-blue">搜索</p>
                    <div style="padding:5px 0;"> 
							<a href="/wcdz/admin.php/Content/add/classid/<?php echo ($classid); ?>" target="_blank"><button class="btn btn-default btn-sm" >+添加内容</button></a>
							<a href="#"><button class="btn btn-default btn-sm" >访问该网站</button></a>
					</div>
                    <form action="/wcdz/admin.php/Content/index/classid/<?php echo ($classid); ?>" method="post">
                    	<div>
                            <span>时间:</span><input type="text" id="formtime" name="formtime" class="form-control input-sm wid-2"/> - 
                            				 <input type="text" id="totime" name="totime" class="form-control input-sm wid-2"/>			
                            <select name="key" class="form-control input-sm wid-1">
                            	<option value="title">标题</option>
                            	<option value="description">简介</option>
                            	<option value="userid">发布者</option>
                            	<option value="id">ID</option>
                            </select>
                            <span>关键字：</span><input type="text" name="keywords" class="form-control input-sm wid-2"/>
                            <button type="submit" class="btn btn-default btn-sm" >搜索</button>
                        </div>
                    </form>
                    
                      <form action="/wcdz/admin.php/Content/sort" method="post">
                     
						<table class="table table-hover">
                        	<thead>
                            	<tr>
                            		<th><input type="checkbox" id="checkbox" onclick='javascript:selectAll("id")'/></th>
                                    <th>排序</th>
                                    <th>文章ID</th>
                                    <th width="40%">标题</th>
                                    <th>点击量</th>
                                    <th>发布者</th>
                                    <th>发布时间</th>
                                    <th class="align-center">管理操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php if(is_array($contentList)): foreach($contentList as $key=>$content): ?><tr>
                            		<td><input type="checkbox" name="id" value="<?php echo ($content["id"]); ?>"/></td>
                                	<td>
                                    	<input type="text" style="width:40px;"  value="<?php echo ($content["sort"]); ?>" name="sort[<?php echo ($content["id"]); ?>]"/>
                                    </td>
                                    <td><?php echo ($content["id"]); ?></td>
                                    <td><?php echo ($content["title"]); ?></td>
                                    <td><?php echo ($content["views"]); ?></td>
                                    <td><?php echo ($content["username"]); ?></td>
                                    <td><?php echo ($content["addtime"]); ?></td>
                                    <td class="align-center">
                                        <a href="<?php echo ($content["url"]); ?>" target="_blank">预览</a>  |
                                    	<a href="/wcdz/admin.php/Content/edit/id/<?php echo ($content["id"]); ?>" target="_blank">修改</a>  |
                                        <a href="/wcdz/admin.php/Content/remove/id/<?php echo ($content["id"]); ?>">删除</a>  
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <div class="pageBar"><?php echo ($page); ?></div>
                        <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="submit" >排序</button>
                            	<button class="btn btn-primary btn-sm" type="button" onclick="javascript:treatCon('/wcdz/admin.php/Content/cancelcheck')">取消审核</button>
                            	<button class="btn btn-primary btn-sm" type="button" onclick="javascript:treatCon('/wcdz/admin.php/Content/remove')">删除</button>
                            </div>
                      </form>
					</div>
                
				</div>
				
				
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
  
    <!-- jQuery文件 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <!--  -->
	<script src="/wcdz/Public/e8admin/default/js/e8.js"></script>
	<!-- 时间选择组件js -->
    <script src="/wcdz/Public/e8admin/default/lib/Datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/wcdz/Public/e8admin/default/lib/Datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
        <script>
	$(document).ready(function(){
	
		$.fn.datetimepicker.dates['zh'] = {
			days: ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期天"],
			daysShort: ["日", "一", "二", "三", "四", "五", "六", "日"],
			daysMin: ["日", "一", "二", "三", "四", "五", "六", "日"],
			months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
			monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
			today: "今天"
		};
		
		
		//时间选择组件
		$('#formtime').datetimepicker({
			format: 'yyyy-mm-dd hh:ii'
		});
		
		//时间选择组件
		$('#totime').datetimepicker({
			format: 'yyyy-mm-dd hh:ii'
		});
		
	})
    </script>
  </body>
</html>