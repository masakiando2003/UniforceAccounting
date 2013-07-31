<?php
/* @var $this SalesInvoiceProductController */
/* @var $model SalesInvoiceProduct */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'salesInvoiceProductId'); ?>
		<?php echo $form->textField($model,'salesInvoiceProductId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salesInvoiceId'); ?>
		<?php echo $form->textField($model,'salesInvoiceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productName'); ?>
		<?php echo $form->textField($model,'productName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productDescription'); ?>
		<?php echo $form->textArea($model,'productDescription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listPrice'); ?>
		<?php echo $form->textField($model,'listPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax'); ?>
		<?php echo $form->textField($model,'tax'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->