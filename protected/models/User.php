<?php
class User extends CActiveRecord{
	/**必须1，返回模型*/
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	/**必须2，返回表名*/
	public function tableName(){
		return "{{admin}}";
	}
}
?>