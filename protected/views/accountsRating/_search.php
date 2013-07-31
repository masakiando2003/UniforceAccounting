<?php
/* @var $this AccountsRatingController */
/* @var $model AccountsRating */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ratingId'); ?>
		<?php echo $form->textField($model,'ratingId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ratingName'); ?>
		<?php echo $form->textField($model,'ratingName',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->