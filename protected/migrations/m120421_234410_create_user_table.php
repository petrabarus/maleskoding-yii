<?php

/**
 * @filesource /protected/migrations/m120421_234410_create_user_table.php
 */
class m120421_234410_create_user_table extends CDbMigration {

	public function up() {
		/* Create table */
		$this->createTable('Users', array(
		    'id' => 'int(11) UNSIGNED NOT NULL AUTO_INCREMENT',
		    'firstName' => 'text NOT NULL',
		    'lastName' => 'text NOT NULL',
		    'city' => 'text NOT NULL',
		    'PRIMARY KEY (id)',
		));

		/* Insert sample data */
		$this->insert('Users', array(
		    'firstName' => 'Arya',
		    'lastName' => 'Stark',
		    'city' => 'Winterfell',
		));
		$this->insert('Users', array(
		    'firstName' => 'Bran',
		    'lastName' => 'Stark',
		    'city' => 'Winterfell',
		));
		$this->insert('Users', array(
		    'firstName' => 'Cersei',
		    'lastName' => 'Lannister',
		    'city' => 'Casterly Rock',
		));
		$this->insert('Users', array(
		    'firstName' => 'Daenarys',
		    'lastName' => 'Targaryen',
		    'city' => 'Dragonstone',
		));
		$this->insert('Users', array(
		    'firstName' => 'Rickard',
		    'lastName' => 'Karstark',
		    'city' => 'Karhold',
		));
		$this->insert('Users', array(
		    'firstName' => 'Robb',
		    'lastName' => 'Stark',
		    'city' => 'Winterfell',
		));
		$this->insert('Users', array(
		    'firstName' => 'Tyrion',
		    'lastName' => 'Lannister',
		    'city' => 'Casterly Rock',
		));
	}

	public function down() {
		$this->dropTable('Users');
	}

}