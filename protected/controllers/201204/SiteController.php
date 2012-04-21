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
		$data = array(
		    'Arya Stark',
		    'Cersei Lannister',
		    'Daenarys Targaryen',
		    'Robb Stark',
		    'Bran Stark',
		    'Rickard Karstark',
		    'Tyrion Lannister',
		);
		$return = array_values(array_filter($data, function($element) use ($term) {
					return (stripos($element, $term) !== false);
				}));
		echo CJSON::encode($return);
	}

}