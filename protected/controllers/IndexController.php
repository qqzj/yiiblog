<?php
	class IndexController extends Controller{
		function actionIndex(){
			//$this->renderPartial('index', array('a'=>'apple', 'b'=>'banana'));
			$this->render('index', array('a'=>'apple', 'b'=>'banana'));
		}
	}
?>