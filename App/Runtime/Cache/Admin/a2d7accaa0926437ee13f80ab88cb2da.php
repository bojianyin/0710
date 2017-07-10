<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
<link href="__PUBLIC__/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/script.js"></script>
</head>
<body style="height:1800px;">
	user:<?php echo ($_SESSION['user']); ?><br />
	上次登录IP:<?php echo ($_SESSION['loginip']); ?><br />
	上次登陆时间:<?php echo date('Y:m:d H:i',$_SESSION['logintime']);?><br />
	<a href="<?php echo U(GROUP_NAME.'/Login/Loginout');?>">退出登陆</a>
	<div class="navbg">
		<div class="col960">
			<ul id="navul" class="cl">
				<li class="navhome"><a href="#">HOME</a></li>
				<li>
					<a href="#">Html</a>	
				</li>
				<li>
					<a href="#">CSS</a>
					<ul>
						<li><a href="#">CSS入门</a></li>
						<li><a href="#">CSS工具</a></li>
						<li><a href="#">CSS技巧</a></li>
						<li><a href="#">CSS实例</a></li>
						<li><a href="#">CSS3</a></li>
						<li><a href="#">CSS hack</a></li>
						<li><a href="#">CSS2.0 手册</a></li>
					</ul>
				</li>
				<li>
					<a href="#">网页特效</a>
					<ul>
						<li><a href="#">导航菜单</a></li>
						<li><a href="#">表单按钮</a></li>
						<li><a href="#">表格图层</a></li>
						<li><a href="#">图片特效</a></li>
						<li><a href="#">滚动特效</a></li>
						<li><a href="#">文字特效</a></li>
						<li><a href="#">时间日期</a></li>
						<li><a href="#">窗口特效</a></li>
						<li><a href="#">鼠标特效</a></li>
					</ul>
				</li>
				<li>
					<a href="#">前端资讯</a>
					<ul>
						<li><a href="#">用户体验</a></li>
						<li><a href="#">前端观察</a></li>
						<li><a href="#">职业生涯</a></li>
					</ul>
				</li>
				<li>
					<a href="#">前端技巧</a>
					<ul>
						<li><a href="#">布局技巧</a></li>
						<li><a href="#">网页字体</a></li>
						<li><a href="#">flash</a></li>
					</ul>
				</li>
				<li>
					<a href="#">杂七杂八</a>
					<ul>
						<li><a href="#">帝国cms</a></li>
						<li><a href="#">电脑技巧</a></li>
						<li><a href="#">随笔杂谈</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Javascript</a>
					<ul>
						<li><a href="#">Jquery</a></li>
						<li><a href="#">Js学习</a></li>
						<li><a href="#">Js教程</a></li>
					</ul>
				</li>
				<li>
					<a href="#">网站优化</a>
					<ul>
						<li><a href="#">SEO杂谈</a></li>
						<li><a href="#">站长工具</a></li>
						<li><a href="#">经验分享</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
<script type="text/javascript"> 
$(document).ready(function(){
	$(".navbg").capacityFixed();
	$("#navul > li").not(".navhome").hover(function(){
		$(this).addClass("navmoon");
	},function(){
		$(this).removeClass("navmoon");
	});
});
</script>
</body>
</html>