<?php
/* @var $this AccountsIndustryController */
/* @var $model AccountsIndustry */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'industryId'); ?>
		<?php echo $form->textField($model,'industryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'industryName'); ?>
		<?php echo $form->textField($model,'industryName',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->