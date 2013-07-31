<?php
/* @var $this AccountsRatingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accounts Ratings',
);

$this->menu=array(
	array('label'=>'Create AccountsRating', 'url'=>array('create')),
	array('label'=>'Manage AccountsRating', 'url'=>array('admin')),
);
?>

<h1>Accounts Ratings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
