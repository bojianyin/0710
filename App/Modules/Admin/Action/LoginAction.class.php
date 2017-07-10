<?php
	Class LoginAction extends Action {
		Public function Login(){
			$this->display();
		}
		Public function loginHandler(){
			$db=M('login')->select();
			foreach($db as $key=>$use){
				if($use['username']==$_POST['username']){
					if($_POST['password']==$use['password']){
						session('uid',$use['id']);
						session('user',$use['username']);
						session('loginip',$use['loginip']);
						session('logintime',$use['logintime']);
						$newDat=array(
							"id"=>$use['id']
							,"loginip"=>get_client_ip()
							,"logintime"=>time()
						);
						$save=M("login")->save($newDat) or die('error!');
						$this->success("登陆成功",U('Category/index'));
					}else{
						$this->error("用户密码错误");
					}
				}else{
					if(($key+1)==M('login')->count()){
						$this->error("用户不存在");
					}
				}
			}
		}
		Public function registerHandler(){
			if(!IS_POST) halt('页面不存在');
			$db=M("login");
			if(I("verify",'','md5')!=$_SESSION['verify']){
				$this->error('验证码不正确');
			}else{
				$data=array(
					"username"=>$_POST['username']
					,"password"=>$_POST['password']
				);
				if($db->add($data)){
					$this->success("注册成功",U('Login/index'));
				}else{
					$this->success("注册失败");
				}
			}
		}
		Public function verify(){
			import("ORG.Util.Image");
			Image::buildImageVerify(4, 1, 'png',70,35);
		}
		Public function Loginout(){
			session_unset();
			session_destroy();
			$this->redirect(GROUP_NAME."/Login/index");
		}
	}
?>