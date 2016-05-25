<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?>--<?php echo ($webInfo["sitename"]); ?></title>
<link href="/dygzz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css"/>
<link href="/dygzz/Public/e8home/default/style/apartment.css" rel="stylesheet" type="text/css" />
<link href="/dygzz/Public/e8home/default/style/left_common.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="body">
﻿ <div class="header">
     <img class="dzlogo" src="/dygzz/Public/e8home/default/images/dzlogo.png" />
     <span><img  class="title" src="/dygzz/Public/e8home/default/images/title.png" /></span>
</div>
<!--content-->
<div class="content">
        <!--nav-->
        <div class="nav">
                <ul class="nav_ul">
                    <li><a href="/dygzz/index.php/Index/index">首页</a></li>

                    <?php if(is_array($navList)): foreach($navList as $key=>$nav): ?><li><a href="<?php echo ($nav["url"]); ?>"><?php echo ($nav["nav_name"]); ?></a>
                            <ul class="inside_nav">
                                <?php if(is_array($nav['sub_nav'])): foreach($nav['sub_nav'] as $key=>$sub): ?><li><p><a href="<?php echo ($sub["url"]); ?>"><?php echo ($sub["nav_name"]); ?></a></p></li><?php endforeach; endif; ?>
                            </ul>
                        </li><?php endforeach; endif; ?>
                      </ul>
        </div>
<!--details-->
<div class="body_com ">
	<link href="/dygzz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css"/>
<link href="/dygzz/Public/e8home/default/style/list.css" rel="stylesheet" type="text/css" />
<div class="listleft">
      <div class="lefttop">
          <h2><?php echo ($navigation); ?></h2>
            <ul>
              <?php if(is_array($contentList)): foreach($contentList as $key=>$content): ?><li><a href="/dygzz/index.php/List/teacher/class/<?php echo ($content["id"]); ?>"><span><?php echo ($content["classname"]); ?></span></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="lxyz"><a href="/dygzz/index.php/Show/leave_word"><img src="/dygzz/Public/e8home/default/images/comment.png" alt="" width="200px" height="70px"></a></div>
        <?php if(is_array($pictureList)): foreach($pictureList as $key=>$picture): ?><div class="xjp" width="177px" height="60px"><a href=""><img src="<?php echo (C("UPLOAD_PATH")); echo ($picture["img"]); ?>" alt="" width="200px" height="70px"></a></div><?php endforeach; endif; ?>
        <div class="lefbottom">
            
        </div>  
    </div>
    <div class="dy_right">
        <h2><span>当前位置：<a href="/dygzz/index.php/Index/index">首页>></a> 示范园地>><?php echo ($title); ?></span></h2>
        <ul>
            <?php if(is_array($studentList)): foreach($studentList as $key=>$student): ?><li>
                <a href="/dygzz/index.php/Show/viewteacher/id/<?php echo ($student["id"]); ?>/type/<?php echo ($type); ?>"><img src="<?php echo (C("UPLOAD_PATH")); echo ($student["photo"]); ?>" width="90" height="90"></a>
                <div class="img_introduce">
                    <span><?php echo ($student["name"]); ?></span></br>
                    <span><?php echo ($student["stuid"]); ?></span></br>
                    <span><?php echo ($student["class"]); ?></span>
                </div>
            </li><?php endforeach; endif; ?>
            </ul>
       <div class="tcdPageCode"><?php echo ($page); ?></div>  
        <div class="dy_rigbottom">       
        </div>   
    </div>
    <div class="clearfix"></div>
</div>         
 ﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--footer-->
<div class="footer">
            <p>地址：学生公寓9单元A栋102室</p>
            <p>技术支持：淮南师范学院E8网络工作室</p>
            <p>主办：淮南师范学院计算机学院党员工作站</p>
 </div>	



</div>
</body>
</html>