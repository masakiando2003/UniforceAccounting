<?php
/* @var $this SalesOrderProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sales Order Products',
);

$this->menu=array(
	array('label'=>'Create SalesOrderProduct', 'url'=>array('create')),
	array('label'=>'Manage SalesOrderProduct', 'url'=>array('admin')),
);
?>

<h1>Sales Order Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
