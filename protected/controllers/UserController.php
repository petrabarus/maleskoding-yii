<?php

/**
 * @filesource /protected/controllers/201204/UserController.php
 */
class UserController extends Controller {

	public function actionView() {
		$user = User::model()->findByPk($_GET['id']);
		if ($user !== NULL) {
			$this->pageTitle = $user->fullName;
			$this->render('index', array(
			    'user' => $user,
			));
		} else
			throw new CHttpException(404);
	}

}