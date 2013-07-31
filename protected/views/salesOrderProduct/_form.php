<?php
/* @var $this SalesOrderProductController */
/* @var $model SalesOrderProduct */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-order-product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'salesOrderId'); ?>
		<?php echo $form->textField($model,'salesOrderId'); ?>
		<?php echo $form->error($model,'salesOrderId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productName'); ?>
		<?php echo $form->textField($model,'productName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'productName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productDescription'); ?>
		<?php echo $form->textArea($model,'productDescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'productDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listPrice'); ?>
		<?php echo $form->textField($model,'listPrice'); ?>
		<?php echo $form->error($model,'listPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax'); ?>
		<?php echo $form->textField($model,'tax'); ?>
		<?php echo $form->error($model,'tax'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->