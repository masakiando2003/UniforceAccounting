<?php
/* @var $this AccountsRatingController */
/* @var $model AccountsRating */

$this->breadcrumbs=array(
	'Accounts Ratings'=>array('index'),
	$model->ratingId=>array('view','id'=>$model->ratingId),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountsRating', 'url'=>array('index')),
	array('label'=>'Create AccountsRating', 'url'=>array('create')),
	array('label'=>'View AccountsRating', 'url'=>array('view', 'id'=>$model->ratingId)),
	array('label'=>'Manage AccountsRating', 'url'=>array('admin')),
);
?>

<h1>Update AccountsRating <?php echo $model->ratingId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>