<?php
/* @var $this AccountsRatingController */
/* @var $model AccountsRating */

$this->breadcrumbs=array(
	'Accounts Ratings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountsRating', 'url'=>array('index')),
	array('label'=>'Manage AccountsRating', 'url'=>array('admin')),
);
?>

<h1>Create AccountsRating</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>