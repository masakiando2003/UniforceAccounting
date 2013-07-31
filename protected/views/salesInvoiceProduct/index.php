<?php
/* @var $this SalesInvoiceProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sales Invoice Products',
);

$this->menu=array(
	array('label'=>'Create SalesInvoiceProduct', 'url'=>array('create')),
	array('label'=>'Manage SalesInvoiceProduct', 'url'=>array('admin')),
);
?>

<h1>Sales Invoice Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
