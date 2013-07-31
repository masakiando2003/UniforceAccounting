<?php
/* @var $this SalesInvoiceController */
/* @var $model SalesInvoice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'salesInvoiceId'); ?>
		<?php echo $form->textField($model,'salesInvoiceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoiceNumber'); ?>
		<?php echo $form->textField($model,'invoiceNumber',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoiceDate'); ?>
		<?php echo $form->textField($model,'invoiceDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accountName'); ?>
		<?php echo $form->textField($model,'accountName'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactName'); ?>
		<?php echo $form->textField($model,'contactName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assignedTo'); ?>
		<?php echo $form->textField($model,'assignedTo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billingAddress'); ?>
		<?php echo $form->textArea($model,'billingAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billingCountry'); ?>
		<?php echo $form->textField($model,'billingCountry',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingAddress'); ?>
		<?php echo $form->textArea($model,'shippingAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingCountry'); ?>
		<?php echo $form->textField($model,'shippingCountry',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'termsConditions'); ?>
		<?php echo $form->textArea($model,'termsConditions',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdTime'); ?>
		<?php echo $form->textField($model,'createdTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifiedTime'); ?>
		<?php echo $form->textField($model,'modifiedTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->