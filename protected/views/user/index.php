<?php
/**
 * @filesource /protected/views/user/index.php
 */
?>
<?php
$this->widget('application.components.widgets.userlookup.UserLookupWidget');
?>
<div>
        <h1><?php echo $user->firstName . " " . $user->lastName; ?></h1>
        <h2><?php echo $user->city; ?></h2>
        <?php echo CHtml::image($user->profilePicturePath); ?>

</div>