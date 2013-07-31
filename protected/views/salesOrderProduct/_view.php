<?php
/* @var $this SalesOrderProductController */
/* @var $data SalesOrderProduct */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesOrderProductId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salesOrderProductId), array('view', 'id'=>$data->salesOrderProductId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesOrderId')); ?>:</b>
	<?php echo CHtml::encode($data->salesOrderId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productName')); ?>:</b>
	<?php echo CHtml::encode($data->productName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productDescription')); ?>:</b>
	<?php echo CHtml::encode($data->productDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listPrice')); ?>:</b>
	<?php echo CHtml::encode($data->listPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax')); ?>:</b>
	<?php echo CHtml::encode($data->tax); ?>
	<br />


</div>