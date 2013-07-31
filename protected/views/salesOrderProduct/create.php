<?php
/* @var $this SalesOrderProductController */
/* @var $model SalesOrderProduct */

$this->breadcrumbs=array(
	'Sales Order Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesOrderProduct', 'url'=>array('index')),
	array('label'=>'Manage SalesOrderProduct', 'url'=>array('admin')),
);
?>

<h1>Create SalesOrderProduct</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>