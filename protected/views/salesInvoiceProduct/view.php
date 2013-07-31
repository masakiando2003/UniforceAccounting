<?php
/* @var $this SalesInvoiceProductController */
/* @var $model SalesInvoiceProduct */

$this->breadcrumbs=array(
	'Sales Invoice Products'=>array('index'),
	$model->salesInvoiceProductId,
);

$this->menu=array(
	array('label'=>'List SalesInvoiceProduct', 'url'=>array('index')),
	array('label'=>'Create SalesInvoiceProduct', 'url'=>array('create')),
	array('label'=>'Update SalesInvoiceProduct', 'url'=>array('update', 'id'=>$model->salesInvoiceProductId)),
	array('label'=>'Delete SalesInvoiceProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salesInvoiceProductId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesInvoiceProduct', 'url'=>array('admin')),
);
?>

<h1>View SalesInvoiceProduct #<?php echo $model->salesInvoiceProductId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salesInvoiceProductId',
		'salesInvoiceId',
		'productName',
		'productDescription',
		'qty',
		'listPrice',
		'tax',
	),
)); ?>
