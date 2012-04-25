<?php
/**
 * @filesource /protected/views/user/index.php
 */
?>
<div>
	<h1><?php echo $user->firstName . " " . $user->lastName; ?></h1>
	<h2><?php echo $user->city;?></h2>
	<?php echo CHtml::image($user->profilePicturePath);?>
	
</div>