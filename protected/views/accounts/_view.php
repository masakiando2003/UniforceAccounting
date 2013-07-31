<?php
/* @var $this AccountsController */
/* @var $data Accounts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->accountId), array('view', 'id'=>$data->accountId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry')); ?>:</b>
	<?php echo CHtml::encode($data->industry); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('accountType')); ?>:</b>
	<?php echo CHtml::encode($data->accountType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingAddress')); ?>:</b>
	<?php echo CHtml::encode($data->billingAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billingCountry')); ?>:</b>
	<?php echo CHtml::encode($data->billingCountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingAddress')); ?>:</b>
	<?php echo CHtml::encode($data->shippingAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingCountry')); ?>:</b>
	<?php echo CHtml::encode($data->shippingCountry); ?>
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