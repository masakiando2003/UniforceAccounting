<?php
/* @var $this ProductsStatusController */
/* @var $model ProductsStatus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'statusId'); ?>
		<?php echo $form->textField($model,'statusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusName'); ?>
		<?php echo $form->textField($model,'statusName',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->