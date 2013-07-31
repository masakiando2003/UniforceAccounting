<?php
/* @var $this AccountsIndustryController */
/* @var $data AccountsIndustry */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('industryId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->industryId), array('view', 'id'=>$data->industryId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industryName')); ?>:</b>
	<?php echo CHtml::encode($data->industryName); ?>
	<br />


</div>