<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
     <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">

    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">
    
  </head>
  
  <body>
  
  	<div class="topbar">
    	
        <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/dygzz/admin.php/Center/index">
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
            		<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>添加链接</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li><a href="/dygzz/admin.php/Link/index">友情链接</a></li>
					<li  class="active"><a href="#">添加友情链接</a></li>
                    <li><a href="/dygzz/admin.php/Link/term">分类管理</a></li>
                    <li><a href="/dygzz/admin.php/Link/termadd">添加分类</a></li>
				</ul>

				<div class="tab-content">
					
					<div  class="tab-pane in active">
						<p class="title background-blue">添加链接</p>
                        <form action = "/dygzz/admin.php/Link/add" enctype="multipart/form-data"  method = "post">
                        	 <table class="table-form" >
                                <tr>
                                    <th class = "table-name" width="150" >链接名称:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="name">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>地址:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="url">
                                    </td>                                
                                </tr>
                                 <tr>
                                    <th>所属分类:</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name ="termsid" /> 
                                            <option value="">==分类选择==</option>                                            	
                                            <?php if(is_array($termList)): foreach($termList as $key=>$term): ?><option value ="<?php echo ($term["id"]); ?>" ><?php echo ($term["name"]); ?></option><?php endforeach; endif; ?>  
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Logo:</th>
                                    <td><input type="file" name="photo" id= "file"/>
                                    </td>                                
                                </tr>
                                <tr>
                                	<th>打开方式</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name = "target"> 
                                            <option value="0">默认方式打开</option>
                                            <option value ="1">新窗口打开</option>
                                        </select>
                                    </td>
                                </tr>   
                                <tr>
                                	<th>链接是否可见</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name ="visible"/> 
                                            <option value = "1">可见</option>
                                            <option value = "0">不可见</option>
                                        </select>
                                    </td>
                                 </tr>     
                                 <tr>
                                    <th>RSS地址:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="请输入" name="rss">
                                    </td>                                
                                </tr> 
                                <tr>
                                    <th>链接描述:</th>
                                    <td>
                                        <textarea class="form-control input-sm wid-4" rows="2" name="description"></textarea>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>链接详细介绍:</th>
                                    <td>
                                        <textarea class="form-control input-sm wid-4" rows="2" name ="notes" ></textarea>
                                    </td>                                
                                </tr>         
                                
						     </table>

                          <div style="width:100%;height:60px;"></div>
                          <div class="admin-add">
                            <button type="submit" class="btn btn-primary btn-sm">添加</button>
                          </div>  
                        </form>
					</div>
                   
				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
  	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <!--  -->
	<script src="/dygzz/Public/e8admin/default/js/e8.js"></script>

  </body>
</html>