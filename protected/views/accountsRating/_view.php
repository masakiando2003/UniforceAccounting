<?php
/* @var $this AccountsRatingController */
/* @var $data AccountsRating */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratingId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ratingId), array('view', 'id'=>$data->ratingId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratingName')); ?>:</b>
	<?php echo CHtml::encode($data->ratingName); ?>
	<br />


</div>