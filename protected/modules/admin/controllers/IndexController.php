<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		$loginForm = new LoginForm();
		$this->render('index', array('loginForm'=>$loginForm));
	}
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class' => 'CCaptchaAction',
				 'height' => 50,
				 'width' => 150,
				 'minLength' => 6,
				 'maxLength' => 6,
			),
		);
	}
}