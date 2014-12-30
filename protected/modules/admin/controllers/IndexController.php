<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		//$userInfo = User::model()->find('username=:name', array(':name'=>'admin'));
		//var_dump($userInfo);die();
		echo '【' . Yii::app()->user->name . '】<hr />';
		$loginForm = new LoginForm();
		if(@$_POST['LoginForm']){
			$loginForm->attributes = $_POST['LoginForm'];
			if($loginForm->validate() && $loginForm->login()){
				echo 'Authentication OK';
				echo '<br />';
				return;
			}
		}
		
		$this->render('index', array('loginForm'=>$loginForm));
	}
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class' => 'system.web.widgets.captcha.CCaptchaAction',
				 'height' => 50,
				 'width' => 150,
				 'minLength' => 4,
				 'maxLength' => 4,
			),
		);
	}
}