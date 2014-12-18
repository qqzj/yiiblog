<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		$loginForm = new LoginForm();
		$this->render('index', array('loginForm'=>$loginForm));
	}
}