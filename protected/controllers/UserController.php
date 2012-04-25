<?php

/**
 * @filesource /protected/controllers/UserController.php
 */
class UserController extends Controller {

	public function actionView() {
		$user = User::model()->findByPk($_GET['id']);
		if ($user !== NULL) {
			$this->pageTitle = $user->firstName. ' '.$user->lastName;
			$this->render('index', array(
			    'user' => $user,
			));
		} else
			throw new CHttpException(404);
	}

}