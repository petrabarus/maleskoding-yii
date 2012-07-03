<?php
class ModelA extends CActiveRecord {
	public static function model($className = __CLASS__) {
	        return parent::model($className);
	}
	
	public function relations() {
                return array(
                	'modelC' => array(self::MANY_MANY, 'ModelC', 'ModelB(aId, cId)'),
                );
	}
}
