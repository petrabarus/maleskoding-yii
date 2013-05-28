<h1>Upload file</h1>

<?php if (Yii::app()->user->hasFlash('Success')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('Success'); ?>
    </div>
<?php endif; ?>
<?php if (Yii::app()->user->hasFlash('Failed')): ?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('Success'); ?>
    </div>
<?php endif; ?>

<?php echo CHtml::beginForm('', 'post', array('enctype' => 'multipart/form-data')); ?>
<?php echo CHtml::fileField('file'); ?>
<?php echo CHtml::submitButton(); ?>
<?php echo CHtml::endForm(); ?>