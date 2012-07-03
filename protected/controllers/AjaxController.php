<?php

/**
 * @filesource /protected/controllers/AjaxController.php 
 */
class AjaxController extends Controller {

        public function actions() {
                Yii::import('application.components.widgets.userlookup.UserLookupWidget');
                return array(
                    'userlookup.' => array(
                        'class' => 'UserLookupWidget',
                    ),
                );
        }

}