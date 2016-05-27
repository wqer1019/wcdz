<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板查看</title>
<link href="/wcdz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css" />
<link href="/wcdz/Public/e8home/default/style/messages_list.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/wcdz/Public/e8home/default/js/time.js"></script>
</head>

<body>
<div class="body_bg"><img src="/wcdz/Public/e8home/default/images/bg.jpg" /></div>
<!--header-->
<div class="header">
     <img class="dzlogo" src="/wcdz/Public/e8home/default/images/dzlogo.png" />
     <span><img  class="title" src="/wcdz/Public/e8home/default/images/title.png" /></span>
</div>
<!--content-->
<div class="content">
        <!--nav-->
        <div class="nav">
                <ul class="nav_ul">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">党站简介</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">工作站简介</a></p></li>
                        <li><p><a href="#">现任站委会</a></p></li>
                        <li><p><a href="#">历届站委会</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">理论导航</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">aa</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">主题实践</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">两学一做</a></p></li>
                        <li><p><a href="#">三严三实</a></p></li>
                        <li><p><a href="#">党课培训</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">党员信息</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">基层组织信息</a></p></li>
                        <li><p><a href="#">党员基本信息</a></p></li>
                        <li><p><a href="#">党员联系同学</a></p></li>
                      </ul>
                    </li>
                    <li><a href="#">示范园地</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">优秀党员</a></p></li>
                        <li><p><a href="#">先进人物</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">服务交流</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">值班安排</a></p></li>
                        <li><p><a href="#">联系我们</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                      </ul>
                    </li>
                </ul>
        </div>
        <!--time-->
          <div class="time">
        <span id="localtime"></span>
    </div>
       <!--content_left-->
  <div class="contentleft">
           <div class="contentleftTop">
               <span class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;流动党员之家
               </span>
                <p class="ctac"><a href="">党员简介</a></p>
                <p><a href="">党员风采</a></p>
                <p><a href="">服务交流</a></p>
           </div>
           <div class="contentleftBottom">
            <p class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;交流园地
            </p>
                <p class="works"><a href=""><img class="works" src="/wcdz/Public/e8home/default/images/work_01.jpg" height="80px" width="100%"></a></p>
                <p class="contact"><a href=""><img class="contact" src="/wcdz/Public/e8home/default/images/contact_01.jpg" height="80px" width="100%"></a></p>
                <p class="message"><a href=""><img class="message" src="/wcdz/Public/e8home/default/images/message_01.jpg" height="80px" width="100%"></a></p>
           </div>
       </div>
       <!--content_right-->
       <div class="contentright">
         <p class="locat">当前位置>>留言列表<a href="<?php echo U('Index/index');?>">首页</a></p>
         
         <?php if(is_array($commentList)): foreach($commentList as $key=>$vo): ?><div class="messages_list">
                <p class="photo"><img src="/wcdz/Public/e8admin/upload/<?php echo ($pictureList[0]['img']); ?>" width="50px" height="50px" /></p>
                <p class="reply"><?php echo ($vo['name']); ?>发表时间<?php echo (date("Y-m-d",$vo["stutime"])); ?></p>
                <p class="ContentS"><?php echo ($vo['comment']); ?></p>
                <!--BUG:此处需要加个显示回复内容的p-->
            </div><?php endforeach; endif; ?>
         <?php if(is_array($commentList)): foreach($commentList as $key=>$vo): ?><div class="messages_list">
                 <p class="photo"><img src="/wcdz/Public/e8admin/upload/<?php echo ($pictureList[0]['img']); ?>" width="50px" height="50px" /></p>
                 <p class="reply"><span class="reply1">回复</span><?php echo ($vo['name']); ?>时间<?php echo (date("Y-m-d",$vo["answertime"])); ?></p>
                 <p class="ContentS"><?php echo ($vo["answer"]); ?></p>
             </div><?php endforeach; endif; ?>
         
         <div class="articleRig_Page">
             <?php echo ($page); ?>
          </div>
       </div>
</div>
<div class="footer">
   <p>主办：淮南师范文化创意与传播学院党员工作站</p>
   <p>技术支持：淮南师范学院E8网络工作室</p>
</div>
<script type="text/javascript">
    window.tick();
</script>
</body>
</html>