<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		if(Yii::app()->user->name == 'Guest')$this->redirect(array('index/index'));
		$this->render('index');
	}
}