<?php
/* @var $this SalesOrderProductController */
/* @var $model SalesOrderProduct */

$this->breadcrumbs=array(
	'Sales Order Products'=>array('index'),
	$model->salesOrderProductId=>array('view','id'=>$model->salesOrderProductId),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesOrderProduct', 'url'=>array('index')),
	array('label'=>'Create SalesOrderProduct', 'url'=>array('create')),
	array('label'=>'View SalesOrderProduct', 'url'=>array('view', 'id'=>$model->salesOrderProductId)),
	array('label'=>'Manage SalesOrderProduct', 'url'=>array('admin')),
);
?>

<h1>Update SalesOrderProduct <?php echo $model->salesOrderProductId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>