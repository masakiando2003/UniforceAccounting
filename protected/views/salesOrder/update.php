<?php
/* @var $this SalesOrderController */
/* @var $model SalesOrder */

$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	$model->salesOrderId=>array('view','id'=>$model->salesOrderId),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesOrder', 'url'=>array('index')),
	array('label'=>'Create SalesOrder', 'url'=>array('create')),
	array('label'=>'View SalesOrder', 'url'=>array('view', 'id'=>$model->salesOrderId)),
	array('label'=>'Manage SalesOrder', 'url'=>array('admin')),
);
?>

<h1>Update SalesOrder <?php echo $model->salesOrderId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>