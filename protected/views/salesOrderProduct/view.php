<?php
/* @var $this SalesOrderProductController */
/* @var $model SalesOrderProduct */

$this->breadcrumbs=array(
	'Sales Order Products'=>array('index'),
	$model->salesOrderProductId,
);

$this->menu=array(
	array('label'=>'List SalesOrderProduct', 'url'=>array('index')),
	array('label'=>'Create SalesOrderProduct', 'url'=>array('create')),
	array('label'=>'Update SalesOrderProduct', 'url'=>array('update', 'id'=>$model->salesOrderProductId)),
	array('label'=>'Delete SalesOrderProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salesOrderProductId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesOrderProduct', 'url'=>array('admin')),
);
?>

<h1>View SalesOrderProduct #<?php echo $model->salesOrderProductId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salesOrderProductId',
		'salesOrderId',
		'productName',
		'productDescription',
		'qty',
		'listPrice',
		'tax',
	),
)); ?>
