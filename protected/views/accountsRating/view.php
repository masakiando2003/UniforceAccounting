<?php
/* @var $this AccountsRatingController */
/* @var $model AccountsRating */

$this->breadcrumbs=array(
	'Accounts Ratings'=>array('index'),
	$model->ratingId,
);

$this->menu=array(
	array('label'=>'List AccountsRating', 'url'=>array('index')),
	array('label'=>'Create AccountsRating', 'url'=>array('create')),
	array('label'=>'Update AccountsRating', 'url'=>array('update', 'id'=>$model->ratingId)),
	array('label'=>'Delete AccountsRating', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ratingId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountsRating', 'url'=>array('admin')),
);
?>

<h1>View AccountsRating #<?php echo $model->ratingId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ratingId',
		'ratingName',
	),
)); ?>
