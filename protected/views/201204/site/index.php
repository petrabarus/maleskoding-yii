<?php

/**
 * @filesource /protected/views/201204/site/index.php
 */
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'user',
    'sourceUrl' => $this->createUrl('lookup'),
    'options' => array(
	'minLength' => '2',
    ),
    'htmlOptions' => array(
	'style' => 'height:20px;'
    ),
));
?>