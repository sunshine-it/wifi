<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo C('sitename');?>--会员中心</title>
<meta name="keywords" content="<?php echo C('keyword');?>"/>
<meta name="description" content="<?php echo C('content');?>"/>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-media.css" />
<link href="<?php echo ($Theme['P']['root']); ?>/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo ($Theme['P']['root']); ?>/font/googlefont.css" rel="stylesheet" />
</head>
<body>
  <!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 
<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
    <li  class="dropdown" id="profile-messages" >
      <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
      <i class="icon icon-user"></i>  
      <span class="text">欢迎光临</span>
      <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="<?php echo U('User/account');?>"><i class="icon-user"></i> 修改密码</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="<?php echo U('User/logout');?>"><i class="icon-key"></i>退出</a>
        </li>
      </ul>
    </li>
	
    <li class="">
      <a title="" href="<?php echo U('User/logout');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a>
    </li>
    <li class="">
      <a title="" href="javascript:void(0);">服务热线：<?php echo C('linktel');?></a>
    </li>
    <li>
      <a title="" href="javascript:void(0);">商务合作：</a>
    </li>
    <li class="">
      <a title="" href="javascript:void(0);">QQ:<?php echo C('qq');?></a>
    </li>
    <li>
      <a title="" href="javascript:void(0);">技术支持：<?php echo C('sitename');?></a>
    </li>
  </ul>
     
</div>

<!--close-top-Header-menu-->

  <!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if(($a == 'index')): ?>active"<?php endif; ?>" ><a href="<?php echo U('User/index');?>"><i class="icon icon-home"></i> <span>首页</span></a> </li>
     <li class="<?php if(($a == 'info')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/info');?>"><i class="icon icon-group"></i> <span>商户信息</span></a> </li>
    <li class="<?php if(($a == 'application')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/application');?>"><i class="icon icon-cogs"></i> <span>应用设置</span></a> </li>
    <li class="<?php if(($a == 'three_p')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/three_p');?>"><i class="icon icon-cogs"></i> <span>微信动态认证</span></a> </li>
           <li class="<?php if(($a == 'routemap')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/routemap');?>"><i class="icon icon-group"></i> <span>路由管理</span></a> </li>
      <li class="<?php if(($a == 'authtplset')): ?>active"<?php endif; ?>"> <a href="<?php echo U('Authset/tplset');?>"><i class="icon icon-th"></i> <span>认证页面</span></a> </li>
     
     
     <li class="submenu <?php if(($a == 'adv')): ?>active"<?php endif; ?>"> <a href="#" id="adv"><i class="icon icon-cloud"></i> <span>广告管理</span></a>
   	 <ul>
        <li><a href="<?php echo U('User/adv');?>">广告管理</a></li>
        
         <li><a href="<?php echo U('User/advrpt');?>">广告统计</a></li>
		
      </ul>
   </li>
   
           <li class="submenu <?php if(($a == 'web3g')): ?>active"<?php endif; ?>"> <a href="#" id="web3g"><i class="icon icon-th-large"></i> <span>小微官网</span></a>
      <ul>
        <li><a href="<?php echo U('index/web/index');?>">网站设置</a></li>
        
         <li><a href="<?php echo U('web/catelog');?>">网站分类</a></li>
		 <li><a href="<?php echo U('web/arts');?>">文章管理</a></li>
		  <li><a href="<?php echo U('web/tempset');?>">模板管理</a></li>
      </ul>
    </li>
     <li class="<?php if(($a == 'comment')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/comment');?>"><i class="icon icon-envelope-alt"></i> <span>客户留言</span></a> </li>
         <li class="submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" > <a href="#" id="urpt"><i class="icon icon-user"></i> <span>用户统计</span></a>
      <ul>
        <li><a href="<?php echo U('User/userchart');?>">统计报表</a></li>
        <li><a href="<?php echo U('User/report');?>">用户列表</a></li>
       

      </ul>
    </li>
    <li class="<?php if(($a == 'online')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/rpt');?>"><i class="icon icon-signal"></i> <span>上网统计</span></a> </li>
   <li class="submenu <?php if(($a == 'advfun')): ?>active"<?php endif; ?>" > <a href="#" id="sale"><i class="icon icon-dashboard"></i> <span>营销管理</span></a>
      <ul>
        <li><a href="<?php echo U('index/Adv/phonelist');?>">手机号码管理</a></li>
         <li><a href="<?php echo U('adv/set');?>">短信帐号管理</a></li>
        <li><a href="<?php echo U('adv/sms');?>">短信群发</a></li>
      	<li><a href="<?php echo U('adv/smslist');?>">短信发送列表</a></li>
      </ul>
    </li>
  
  </ul>
</div>
<!--sidebar-menu-->
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>
      <a href="#">营销管理</a> 
      <a href="#"  class="current">短信帐号管理</a>
    </div>  
  </div>
<!--End-breadcrumbs-->
    <div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>短信帐号管理</h5>
        </div>
      <div class="widget-content nopadding">
 		<form class="form-horizontal" name='form' action="<?php echo U('saveset');?>" method="post" enctype="multipart/form-data">
        	  <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
            <input type="hidden" name="id1" value="<?php echo ($info1["id"]); ?>">
            <input type="hidden" name="action" value="<?php echo ($info["action"]); ?>">
            <input type="hidden" name="action1" value="<?php echo ($info1["action"]); ?>">
       		<div class="control-group">
       		  <div class="span1"></div>
       			<div class="alert alert-block span10 hide" id="msgbox"> 
              <h4 class="alert-heading">提示信息</h4>
             <div id="alertmsg"></div>
              </div>
       		</div>
          <div class="control-group">
            <div class="span10 " style="background:#F9F9F9;padding-left:20px"> 
              <h5 class="alert-heading" >广告群发账号</h5>
             <div id="alertmsg"></div>
              </div>
          </div>
            
            <div class="control-group"  id="wxacc">
              <label class="control-label">短信帐号（accesskey）:</label>
              <div class="controls">
                 <input type="text" placeholder="" id="user" name="user" class="span4" value="<?php echo ($info["user"]); ?>" >
              </div>
            </div>
            <div class="control-group"  id="wxacc">
              <label class="control-label">密码（secretkey）:</label>
              <div class="controls">
               <input type="text" placeholder="" id="password" name="password"  class="span4" value="<?php echo ($info["password"]); ?>">
              </div>
            </div>

            <div class="control-group">
              <div class="span10 " style="background:#F9F9F9;padding-left:20px"> 
                <h5 class="alert-heading" >群发账号(验证码)</h5>
                <!-- <div id="alertmsg"></div> -->
              </div>
            </div>
            <div class="control-group"  id="wxacc">
              <label class="control-label">短信帐号（accesskey）:</label>
              <div class="controls">
                 <input type="text" placeholder="" id="user1" name="user1" class="span4" value="<?php echo ($info1["user"]); ?>" >
              </div>
            </div>
            <div class="control-group"  id="wxacc">
              <label class="control-label">密码（secretkey）:</label>
              <div class="controls">
               <input type="text" placeholder="" id="password1" name="password1"  class="span4" value="<?php echo ($info1["password"]); ?>">
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" name="sub" id="btn_sub" value="保存帐号"/>&nbsp;&nbsp;
             </br>说明：广告群发账号对垃圾短信不进行处理，验证码群发账号对垃圾短信进行获取验证码获取
                 </br>
                 接入步骤：请联系我们 <a href="http://www.mbmkt.com"><font color="blue">起讯科技</font></a>客服热线：4006600909          
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--end-main-container-part-->
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2015-2018 &copy; cuckoowifo <a href="<?php echo C('siteurl');?>"><?php echo C('shortsiteurl');?></a><br> <a href="http://www.miitbeian.gov.cn/">京ICP备14017729号</a></div>
</div>
<!--end-Footer-part--> 
<script>

</script>
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script> 
		<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
$(document).ready(function(){
	
	$('#sale').trigger('click');
});
  $(function(){
		$('#btn_sub').bind('click',function(){
			var u=$('#user').val();
			var sms=$('#password').val();
			 if (u == "") {
				 AlertTips( "请输入用户帐号",  2000);
			        return false;
			 }
			  if (sms == "") {
				
				  AlertTips( "请输入密码",2000);
			        return false;
			  }
			  return true;
			});
	  });

</script>
</body>
</html>