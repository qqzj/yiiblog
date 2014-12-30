<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		//$userInfo = User::model()->find('username=:name', array(':name'=>'admin'));
		//var_dump($userInfo);die();
		if(Yii::app()->user->name != 'Guest')$this->redirect(array('default/index'));
		$loginForm = new LoginForm();
		if(@$_POST['LoginForm']){
			$loginForm->attributes = $_POST['LoginForm'];
			if($loginForm->validate() && $loginForm->login()){
				Yii::app()->session['loginDate'] = time();
				$this->redirect(array('default/index'));
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
	
	public function actionOut(){
		Yii::app()->user->logout();
		$this->redirect(array('index/index'));
	}
}