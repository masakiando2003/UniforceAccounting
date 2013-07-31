<?php
/* @var $this SalesOrderController */
/* @var $data SalesOrder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesOrderId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salesOrderId), array('view', 'id'=>$data->salesOrderId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountName')); ?>:</b>
	<?php echo CHtml::encode($data->accountName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactName')); ?>:</b>
	<?php echo CHtml::encode($data->contactName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assignedTo')); ?>:</b>
	<?php echo CHtml::encode($data->assignedTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingAddress')); ?>:</b>
	<?php echo CHtml::encode($data->billingAddress); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('billingCountry')); ?>:</b>
	<?php echo CHtml::encode($data->billingCountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingAddress')); ?>:</b>
	<?php echo CHtml::encode($data->shippingAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingCountry')); ?>:</b>
	<?php echo CHtml::encode($data->shippingCountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termsConditions')); ?>:</b>
	<?php echo CHtml::encode($data->termsConditions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdTime')); ?>:</b>
	<?php echo CHtml::encode($data->createdTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedTime')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedTime); ?>
	<br />

	*/ ?>

</div>