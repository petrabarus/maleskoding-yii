<?php
class ModelC extends CActiveRecord {
	public static function model($className = __CLASS__) {
	        return parent::model($className);
	}
	
	public function relations() {
                return array(
                	'modelA' => array(self::MANY_MANY, 'ModelA', 'ModelB(cId, aId)'),
                );
	}
}
