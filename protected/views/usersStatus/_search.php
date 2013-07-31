<?php
/* @var $this UsersStatusController */
/* @var $model UsersStatus */
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
		<?php echo $form->textField($model,'statusName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->