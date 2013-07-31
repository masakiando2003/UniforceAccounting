<?php
/* @var $this ProductsStatusController */
/* @var $model ProductsStatus */

$this->breadcrumbs=array(
	'Products Statuses'=>array('index'),
	$model->statusId,
);

$this->menu=array(
	array('label'=>'List ProductsStatus', 'url'=>array('index')),
	array('label'=>'Create ProductsStatus', 'url'=>array('create')),
	array('label'=>'Update ProductsStatus', 'url'=>array('update', 'id'=>$model->statusId)),
	array('label'=>'Delete ProductsStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->statusId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductsStatus', 'url'=>array('admin')),
);
?>

<h1>View ProductsStatus #<?php echo $model->statusId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'statusId',
		'statusName',
	),
)); ?>
