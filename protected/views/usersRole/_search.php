<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'roleId'); ?>
		<?php echo $form->textField($model,'roleId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roleName'); ?>
		<?php echo $form->textField($model,'roleName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->