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
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">

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
        	<h1>管理员管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
                    <?php if($cancel != 0): ?><li><span><a href="/wcdz/admin.php/Role/index" class="e8-prompt" style="font-size:12px;">&lt;返回角色管理</a></span>&nbsp;&nbsp;&nbsp;</li><?php endif; ?>
					<li class="active">
						<a  href="#">管理员管理</a>
					</li>

					<li>
						<a  href="/wcdz/admin.php/User/add">添加管理员</a>
					</li>
				</ul>
				
				<div class="tab-content">
					<div  class="tab-pane in active">
                    
                    <p class="title background-blue">管理员列表</p>
						<table class="table table-hover">
                        	<thead>
                            	<tr>
                                    <th>序号</th>
                                    <th>用户名</th>
                                    <th>所属分组</th>
                                    <th>最后登陆IP</th>
                                    <th>最后登陆时间</th>
                                    <th>E-mail</th>
                                    <th>备注信息</th>
                                    <th class="align-center">管理操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($userArr)): $k = 0; $__LIST__ = $userArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($k % 2 );++$k;?><tr>
                                        <td>#<?php echo ($k); ?></td>
                                        <td><?php echo ($user["username"]); ?></td>
                                        <td><?php echo ($user["rolename"]); ?></td>
                                        <td><?php echo ($user["last_login_ip"]); ?></td>
                                        <td><?php echo (date('Y/m/d h:i:s',$user["last_login_time"])); ?></td>
                                        <td><?php echo ($user["email"]); ?></td>
                                        <td><?php echo ($user["remark"]); ?></td>
                                        <td class="align-center">
                                            <a href="/wcdz/admin.php/User/edit/id/<?php echo ($user["id"]); ?>/mw/<?php echo ($user["mw"]); ?>">修改</a>  |
                                            <a href="javascript:void(0);" onclick="return confirm('/wcdz/admin.php/User/del/id/<?php echo ($user["id"]); ?>/mw/<?php echo ($user["mw"]); ?>','确定删除?');">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
					</div>

                    <div class="pageBar"><?php echo ($page); ?></div>

				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
  
    <!-- jQuery文件 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
	<script src="/wcdz/Public/e8admin/default/js/e8.js"></script>
    
  </body>
</html>