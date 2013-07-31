<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */

$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	$model->salesOrderId,
);

$this->menu=array(
	array('label'=>'List SalesOrder', 'url'=>array('index')),
	array('label'=>'Create SalesOrder', 'url'=>array('create')),
	array('label'=>'Update SalesOrder', 'url'=>array('update', 'id'=>$model->salesOrderId)),
	array('label'=>'Delete SalesOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salesOrderId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesOrder', 'url'=>array('admin')),
);
?>

<h1>View SalesOrder #<?php echo $model->salesOrderId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salesOrderId',
		'subject',
		'accountName',
		'contactName',
		'status',
		'assignedTo',
		'billingAddress',
		'billingCountry',
		'shippingAddress',
		'shippingCountry',
		'termsConditions',
		'description',
		'createdTime',
		'modifiedTime',
	),
)); ?>
