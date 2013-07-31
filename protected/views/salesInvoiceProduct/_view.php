<?php
/* @var $this SalesInvoiceProductController */
/* @var $data SalesInvoiceProduct */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesInvoiceProductId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salesInvoiceProductId), array('view', 'id'=>$data->salesInvoiceProductId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesInvoiceId')); ?>:</b>
	<?php echo CHtml::encode($data->salesInvoiceId); ?>
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