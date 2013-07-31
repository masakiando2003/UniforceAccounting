<?php
/* @var $this SalesInvoiceController */
/* @var $model SalesInvoice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-invoice-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiceNumber'); ?>
		<?php echo $form->textField($model,'invoiceNumber',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'invoiceNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiceDate'); ?>
		<?php echo $form->textField($model,'invoiceDate'); ?>
		<?php echo $form->error($model,'invoiceDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dueDate'); ?>
		<?php echo $form->textField($model,'dueDate'); ?>
		<?php echo $form->error($model,'dueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountName'); ?>
		<?php echo $form->textField($model,'accountName'); ?>
		<?php echo $form->error($model,'accountName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactName'); ?>
		<?php echo $form->textField($model,'contactName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contactName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assignedTo'); ?>
		<?php echo $form->textField($model,'assignedTo'); ?>
		<?php echo $form->error($model,'assignedTo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billingAddress'); ?>
		<?php echo $form->textArea($model,'billingAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'billingAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billingCountry'); ?>
		<?php echo $form->textField($model,'billingCountry',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'billingCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingAddress'); ?>
		<?php echo $form->textArea($model,'shippingAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shippingAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingCountry'); ?>
		<?php echo $form->textField($model,'shippingCountry',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'shippingCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'termsConditions'); ?>
		<?php echo $form->textArea($model,'termsConditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'termsConditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdTime'); ?>
		<?php echo $form->textField($model,'createdTime'); ?>
		<?php echo $form->error($model,'createdTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modifiedTime'); ?>
		<?php echo $form->textField($model,'modifiedTime'); ?>
		<?php echo $form->error($model,'modifiedTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->