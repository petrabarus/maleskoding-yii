<?php

class ErrorController extends Controller {

        public function actionIndex() {
                $error = Yii::app()->errorHandler->error;
                $this->render('index', array(
                    'error' => $error,
                ));
        }

}