<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <link id="jquiCSS" rel="stylesheet" href="http://ajax.useso.com/ajax/libs/jqueryui/1.8.18/themes/ui-lightness/jquery-ui.css" type="text/css" media="all">
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    
     <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <!-- 颜色选择组件 css -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/Colorpicker/evol.colorpicker.css">
    <!-- 时间选择组件 css -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/Datepicker/css/bootstrap-datetimepicker.min.css">
    
   <!-- 加载百度编辑器js -->
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">
    <link rel="stylesheet" type="text/css" href="/dygzz/Public/e8admin/default/css/jquery.datetimepicker.css"/>
    
    
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
            		<input type="email" class="form-control  input-sm" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>添加先进人物</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li><a href="/dygzz/admin.php/Advance">先进人物管理</a></li>
                    <li  class="active"><a href="#">添加先进人物</a></li>
                </ul>
				</ul>

				<div class="tab-content">
				
					<div  class="tab-pane in active">
						<p class="title background-blue">添加先进人物</p>
                        <form action = "/dygzz/admin.php/Advance/add" enctype="multipart/form-data"  method = "post">
                        	 <table class="table-form" >
                                <tr>
                                    <th class = "table-name" style="width:150px;" >姓名:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="name">
                                    </td>                                
                                </tr>
                                
                                <tr>
                                    <th>班级:</th>
                                    <td>
                                        <select class="form-control input-sm wid-3" name="cid">
                                            <option value="0" selected>----请选择班级----</option>
                                            <?php if(is_array($classnameList)): foreach($classnameList as $key=>$classname): ?><option value="<?php echo ($classname["id"]); ?>" ><?php echo ($classname["classname"]); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>政治面貌:</th>
                                    <td>
                                        <select class="form-control input-sm wid-3" name="status">
                                            <option value="0">正式党员</option>
                                            <option value="1">预备党员</option>
                                            <option value="2">共青团员</option>
                                        </select>
                                    </td> 
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>学号:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="stuid"/>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>图片:</th>
                                    <td><input type="file" name="photo" />
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>联系方式:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="telephone">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>籍贯:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="place">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>宿舍:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="domitory">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>获奖情况:</th>
                                    <td>
                                            <textarea  class="form-control" style="height:90px;width:400px;" name="prize"></textarea>
                                    </td>                       
                                </tr> 
                                <tr>
                                    <th>个人简介:</th>
                                    <td>
                                            <textarea  class="form-control" style="height:90px;width:400px;" name="introduction"></textarea>
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
      <!-- jQuery文件 -->
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery-ui 文件 -->
    <script src="http://libs.baidu.com/jqueryui/1.10.2/jquery-ui.min.js "></script>
    <!-- Bootstrap 核心 JavaScript 文件 -->
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
   
    <!-- 时间选择组件js -->
    <script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/Datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/Datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
    <script src="/dygzz/Public/e8admin/default/js/jquery.datetimepicker.js"></script>
   
    <script>
    //实例化编辑器
    var ue = UE.getEditor('editor');

    /*$(document).ready(function(){
        //时间选择组件
        $('#datepicker').datepicker({
            inline: true
        });
        
    })；*/
     $('#datetimepicker2').datetimepicker({
        timepicker:false,
        format:'m/d/y',
        formatDate:'m/d/y',
        
    });
      $('#datetimepicker3').datetimepicker({
        timepicker:false,
        format:'m/d/y',
        formatDate:'m/d/y',
        
    });
    </script>
  </body>
</html>