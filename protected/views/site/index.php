<?php
	$this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'my-grid',
		'dataProvider' => $dataProvider,
		'columns' => array(
			't.id',
		),
	));
?>
