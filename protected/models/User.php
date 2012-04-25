<?php

/**
 * This is the model class for table "Users".
 *
 * The followings are the available columns in table 'Users':
 * @property string $id
 * @property string $firstName
 * @property string $lastName
 * @property string $city
 * //
 * @property string $fullName
 */
class User extends CActiveRecord {

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'Users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		    array('firstName, lastName, city', 'required'),
		    // The following rule is used by search().
		    // Please remove those attributes that should not be searched.
		    array('id, firstName, lastName, city', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
		    'id' => 'ID',
		    'firstName' => 'First Name',
		    'lastName' => 'Last Name',
		    'city' => 'City',
		);
	}

	/**
	 * @return string profile picture path.
	 */
	public function getProfilePicturePath() {
		return '/images/' . $this->id . '.jpg';
	}

	/**
	 * @return string profile page.
	 */
	public function getProfilePage() {
		return CHtml::normalizeUrl(array('/user/view', 'id' => $this->id));
	}

	/**
	 * @return string full name of the user.
	 */
	public function getFullName() {
		return $this->firstName . ' ' . $this->lastName;
	}

}