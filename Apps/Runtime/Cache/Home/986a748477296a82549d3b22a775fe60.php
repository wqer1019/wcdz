<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/wcdz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css" />
<link href="/wcdz/Public/e8home/default/style/message.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/wcdz/Public/e8home/default/js/time.js"></script>
<title>留言板</title>
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
           <form method='post' action="<?php echo U('Show/leave_word');?>" >
         <p class="locat">当前位置>>留言板<a href="<?php echo U('Index/index');?>">首页</a></p>
               <h1><img src="/wcdz/Public/e8home/default/images/messages_1.png" width="190" height="70" /></h1>
               <p class="borders"><span><i><img src="/wcdz/Public/e8home/default/images/b_06_01.png" width="40" height="40" /></i></span><input type="text" name="name" placeholder="Name"  /></p>
         <p class="borders"><span><i><img src="/wcdz/Public/e8home/default/images/b_06_03.png" width="40" height="40" /></i></span><input type="email" name="email" placeholder="Email" /></p>
         <p class="borders"><span><i><img src="/wcdz/Public/e8home/default/images/b_06_05.png" width="40" height="40" /></i></span><input  type="text"  id="phone" maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,'')" placeholder="Phone" />
</p>
         <p class="borders_a"><span><i><img src="/wcdz/Public/e8home/default/images/msg.png" width="40" height="40" /></i></span><textarea name="comment" placeholder="Contents"></textarea></p>
         <input class="menu menu1" type="submit" value="查看留言" />
         <input class="menu menu2" type="submit" value="提交" />
           </form>
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