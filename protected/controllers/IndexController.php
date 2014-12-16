<?php
	class IndexController extends Controller{
		function actionIndex(){
			$this->renderPartial('index', array('a'=>'apple', 'b'=>'banana'));
		}
	}
?>