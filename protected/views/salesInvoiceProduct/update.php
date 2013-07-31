<?php
/* @var $this SalesInvoiceProductController */
/* @var $model SalesInvoiceProduct */

$this->breadcrumbs=array(
	'Sales Invoice Products'=>array('index'),
	$model->salesInvoiceProductId=>array('view','id'=>$model->salesInvoiceProductId),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesInvoiceProduct', 'url'=>array('index')),
	array('label'=>'Create SalesInvoiceProduct', 'url'=>array('create')),
	array('label'=>'View SalesInvoiceProduct', 'url'=>array('view', 'id'=>$model->salesInvoiceProductId)),
	array('label'=>'Manage SalesInvoiceProduct', 'url'=>array('admin')),
);
?>

<h1>Update SalesInvoiceProduct <?php echo $model->salesInvoiceProductId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>