<?php

/**
 * @filesource /protected/controllers/201204/SiteController.php
 */
class SiteController extends Controller {

	/**
	 * Renders the autocomplete.
	 */
	public function actionIndex() {
		$this->render('index');
	}

	/**
	 * Returns data for the autocomplete lookup.
	 */
	public function actionLookup() {
		$term = $_GET['term'];
		$users = User::model()->findAll(array(
		    'condition' => 'firstName LIKE :firstName OR lastName LIKE :lastName',
		    'params' => array(
			':firstName' => "%$term%",
			':lastName' => "%$term%",
		    ),
			));
		$return = array();
		foreach ($users as $user) {
			$return[] = $user->firstName . ' ' . $user->lastName;
		}
		echo CJSON::encode($return);
	}

}