<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <link id="jquiCSS" rel="stylesheet" href="http://ajax.useso.com/ajax/libs/jqueryui/1.8.18/themes/ui-lightness/jquery-ui.css" type="text/css" media="all">
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    
     <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <!-- 颜色选择组件 css -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/Colorpicker/evol.colorpicker.css">
    <!-- 时间选择组件 css -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/Datepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="/wcdz/Public/e8admin/default/css/jquery.datetimepicker.css"/>
    
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">
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
            		<input type="email" class="form-control  input-sm" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>修改党员信息</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li><a href="/wcdz/admin.php/Partymember">党员信息管理</a></li>
                    <li ><a href="/wcdz/admin.php/Partymember/add">添加党员信息 </a></li>
                    <li  class="active"><a href="#">修改党员信息 </a></li>

                </ul>
				</ul>

				<div class="tab-content">
				
					<div  class="tab-pane in active">
						<p class="title background-blue">修改党员信息</p>
                        <form action = "/wcdz/admin.php/Partymember/edit/id/<?php echo ($studentList["id"]); ?>" enctype="multipart/form-data"  method = "post">
                                <input type="hidden" name="id" value="<?php echo ($studentList["id"]); ?>"/>
                        	 <table class="table-form" >
                                <tr>
                                    <th class = "table-name" width="150" >姓名:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="name" value="<?php echo ($studentList["name"]); ?>">
                                    </td>                                
                                </tr>
                                
                                <tr>
                                    <th>班级:</th>
                                    <td>
                                        <select class="form-control input-sm wid-3" name="cid">
                                            <option value="0">----请选择班级----</option>
                                            <?php if(is_array($classnameList)): foreach($classnameList as $key=>$classname): ?><option value="<?php echo ($classname["id"]); ?>" <?php echo ($classname["select"]); ?>><?php echo ($classname["classname"]); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>政治面貌:</th>
                                    <td>
                                        <form action="" method="">
                                            <input name="status" type="radio" value="0" <?php echo ($studentList["zchecked"]); ?> />正式党员&nbsp;&nbsp;&nbsp;
                                            <input name="status" type="radio" value="1" <?php echo ($studentList["ychecked"]); ?>/>预备党员
                                        </form>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>优秀党员:</th>
                                    <td>
                                        <select class="form-control input-sm wid-3" name="isextro">
                                            <option value="1" <?php echo ($studentList["sele"]); ?> >------优秀党员------</option>
                                            <option value="0" <?php echo ($studentList["nsele"]); ?> >------非优秀党员------</option>
                                        </select>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>学号:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="stuid" value="<?php echo ($studentList["stuid"]); ?>"/>
                                    </td>                                
                                </tr>
                                
                                <tr>
                                    
                                    <th>图片:</th>
                                    <td>
                                        <img class="img-circle" id="photo"
                                        src="<?php echo (C("UPLOAD_PATH")); echo ($studentList["photo"]); ?>" alt="Image" width="50" height="50">

                                        <input type="file" name="photo" />
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>联系方式:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="telephone" value="<?php echo ($studentList["telephone"]); ?>">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>籍贯:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="place" value="<?php echo ($studentList["place"]); ?>"/>
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>宿舍:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="domitory" value="<?php echo ($studentList["domitory"]); ?>"/>
                                    </td>                                
                                </tr>
                                 <tr>
                                        <th width="100">获奖情况：</th>
                                        <td>
                                            <textarea  class="form-control" style="height:90px;" name="prize" ><?php echo ($studentList["prize"]); ?></textarea>
                                        </td>
                                </tr> 
                                <tr>
                                    <th>个人简介:</th>
                                    <td>
                                            <textarea  class="form-control" style="height:90px;" name="introduction" ><?php echo ($studentList["introduction"]); ?></textarea>
                                    </td>
                                                                
                                </tr>    
                                                            
                             </table>

                          <div style="width:100%;height:60px;"></div>
                          <div class="admin-add">
                            <button type="submit" class="btn btn-primary btn-sm">修改</button>
                          </div>  
                        </form>
					</div>
                   
				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    <!-- jQuery文件 -->
    <!-- 图片弹出层 -->
    <div id="outerdiv"
        style="position: fixed; top: 0; left: 0; background: rgba(0, 0, 0, 0.7); z-index: 10000; width: 100%; height: 100%; display: none;">
        <div id="innerdiv" style="position: absolute;">
          <img id="bigimg" style="border: 5px solid #fff;" src="" />
        </div>
    </div>
    
    <!-- jQuery文件 -->
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery-ui 文件 -->
    <script src="http://libs.baidu.com/jqueryui/1.10.2/jquery-ui.min.js "></script>
    <!-- Bootstrap 核心 JavaScript 文件 -->
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    
    <!-- 颜色选择组件js -->
    <script src="/wcdz/Public/e8admin/default/lib/Colorpicker/evol.colorpicker.js"></script>
    <!-- 时间选择组件js -->
    <script src="/wcdz/Public/e8admin/default/lib/Datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/wcdz/Public/e8admin/default/lib/Datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
     <script src="/wcdz/Public/e8admin/default/js/fun.js"></script>
     <script src="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>

    <script>
    $(document).ready(function() { 
        $("#photo").click(function(){
            var _this = $(this);//将当前的元素作为_this传入函数
            imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);
        });
    });
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