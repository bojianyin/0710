<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Login</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/login.js"></script>
<link href="__PUBLIC__/css/login2.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
	#verify{width:50%;float:left}
	#verify~img{float: right;}
</style>
<script>
function genhuan(_this){
	_this.setAttribute("src","<?php echo U(GROUP_NAME.'/Login/verify');?>"+'/'+Math.random());
}
</script>
<body>
<h1>后台登录<sup>V2017</sup></h1>

<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               <div class="login-box">
			<div class="login_form">
				<form action="<?php echo U(GROUP_NAME.'/Login/loginHandler');?>" name="loginform" id="login_form" class="loginForm" method="post">
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="u" name="username" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
	               <label class="input-tips" for="p">密码：</label> 
	               <div class="inputOuter" id="pArea">
	                    <input type="password" id="p" name="password" class="inputstyle"/>
	                </div>
                </div>
                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue" onclick="return tijiao()"/></div>
              </form>
          </div>
            	</div>
               
            </div>
            <!--登录end-->
  </div>

  <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
    <div class="web_login">
    	<form name="form2" id="regUser" action="<?php echo U(GROUP_NAME.'/Login/registerHandler','','');?>" method="post">   		       
        <ul class="reg_form" id="reg-ul">
        		<div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                	
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="user" name="username" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd"  name="password" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                <li>
                <label for="passwd2" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd2" name="password2" maxlength="16" class="inputstyle2" />
                    </div>
                    
                </li>
                
                <li>
            	
                 <label for="verify" class="input-tips2">验证码：</label>
                    <div class="inputOuter2">
                    	<input type="text" id="verify" name="verify" maxlength="16" class="inputstyle2" />
                        <img src="<?php echo U(GROUP_NAME.'/Login/verify');?>" alt="" onclick="genhuan(this)" />
                    </div>
                   
                </li>
                
                <li>
                    <div class="inputArea">
                        <input type="submit" id="reg"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册" onclick="return tijiao2()"/> <a href="#" class="zcxy" target="_blank">注册协议</a>
                    </div>
                    
                </li><div class="cl"></div>
            </ul></form>
           
    
    </div>
   
    
    </div>
    <!--注册end-->
</div>
<script>
	
	function tijiao(){
		if($("#u").val()==""){
			$("#u")[0].focus();
			return false;
		}else if($("#p").val()==""){
			$("#p")[0].focus();
			return false;
		}
	}
	function tijiao2(){
		if($("#user").val()==""){
			$("#user")[0].focus();
			$("#userCue").html("请填写用户名！")
			return false;
		}else if($("#passwd").val()==""){
			$("#passwd")[0].focus();
			$("#userCue").html("请填写密码！")
			return false;
		}else if($("#passwd2").val()==""){
			$("#passwd2")[0].focus();
			$("#userCue").html("请再次填写密码！")
			return false;
		}else if($("#passwd").val()!=$("#passwd2").val()){
			$("#passwd2")[0].focus();
			$("#userCue").html("俩次密码不一致");
			return false;
		}else if($("#verify").val()==""){
			$("#verify")[0].focus();
			$("#userCue").html("请填写验证码！")
			return false;
		}
	}
</script>
</body>

</html>