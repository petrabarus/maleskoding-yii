<?php

$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'city',
    'sourceUrl' => $this->createUrl('lookup'),
    'options' => array(
	'minLength' => '2',
    ),
    'htmlOptions' => array(
	'style' => 'height:20px;'
    ),
));
?>