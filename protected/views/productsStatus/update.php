<?php
/* @var $this ProductsStatusController */
/* @var $model ProductsStatus */

$this->breadcrumbs=array(
	'Products Statuses'=>array('index'),
	$model->statusId=>array('view','id'=>$model->statusId),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductsStatus', 'url'=>array('index')),
	array('label'=>'Create ProductsStatus', 'url'=>array('create')),
	array('label'=>'View ProductsStatus', 'url'=>array('view', 'id'=>$model->statusId)),
	array('label'=>'Manage ProductsStatus', 'url'=>array('admin')),
);
?>

<h1>Update ProductsStatus <?php echo $model->statusId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>