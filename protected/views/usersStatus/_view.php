<?php
/* @var $this UsersStatusController */
/* @var $data UsersStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->statusId), array('view', 'id'=>$data->statusId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusName')); ?>:</b>
	<?php echo CHtml::encode($data->statusName); ?>
	<br />


</div>