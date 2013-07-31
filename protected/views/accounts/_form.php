<?php
/* @var $this AccountsController */
/* @var $model Accounts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accounts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'industry'); ?>
		<?php echo $form->textField($model,'industry'); ?>
		<?php echo $form->error($model,'industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountType'); ?>
		<?php echo $form->textField($model,'accountType'); ?>
		<?php echo $form->error($model,'accountType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
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