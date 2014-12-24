<?php
	class IndexController extends Controller{
		function actionIndex(){
			$this->layout='//layouts/column3';
			//$this->renderPartial('index', array('a'=>'apple', 'b'=>'banana'));
			$userInfo = User::model()->find('username=:name', array(':name'=>'admin'));
			echo $userInfo->username.' - '.$userInfo->password.'<hr />';
			$this->render('index', array('a'=>'apple', 'b'=>'banana'));
		}
	}
?>