<?php

/**
 * @filesource /protected/views/201204/site/index.php
 */
$autoCompleteId = 'userautocomplete';
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'id' => $autoCompleteId,
    'name' => 'user',
    'sourceUrl' => $this->createUrl('lookup'),
    'options' => array(
	'minLength' => '2',
	'select' => <<<EOJS
js:function(event, ui){
	window.location.href = ui.item.url;
}
EOJS
    ,
    ),
    'htmlOptions' => array(
	'style' => 'height:20px;'
    ),
));

Yii::app()->clientScript->registerScript('userAutoComplete', <<<EOJS
jQuery('#$autoCompleteId').data('autocomplete')._renderItem = function( ul, item ) {
	return $('<li></li>')
		.data('item.autocomplete', item)
		.append('<a href=\'http://example.com\' class=\'userautocompletelink\'><img src=\''+item.image+'\'/><h1>'+item.label+'</h1><h2>'+item.city+'</h2></a>')
		.appendTo(ul);
};

EOJS
	, CClientScript::POS_READY);

Yii::app()->clientScript->registerCss('userAutoComplete', <<<EOCSS
        .userautocompletelink {height:52px;}
	.userautocompletelink img {float:left;margin-right:5px;}
	.userautocompletelink h1 {font-size:15px;padding:0px;margin:0px;font-width:bold;}
	.userautocompletelink h2 {font-size:12px;padding:0px;margin:0px;}
EOCSS
);
?>