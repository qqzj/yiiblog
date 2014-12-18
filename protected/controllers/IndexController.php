<?php
	class IndexController extends Controller{
		function actionIndex(){
			$this->layout='//layouts/column3';
			//$this->renderPartial('index', array('a'=>'apple', 'b'=>'banana'));
			$this->render('index', array('a'=>'apple', 'b'=>'banana'));
		}
	}
?>