<?php
class User extends CActiveRecord{
	/**����1������ģ��*/
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	/**����2�����ر���*/
	public function tableName(){
		return "{{admin}}";
	}
}
?>