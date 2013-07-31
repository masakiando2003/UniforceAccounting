<?php
/* @var $this SalesInvoiceController */
/* @var $model SalesInvoice */

$this->breadcrumbs=array(
	'Sales Invoices'=>array('index'),
	$model->salesInvoiceId=>array('view','id'=>$model->salesInvoiceId),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalesInvoice', 'url'=>array('index')),
	array('label'=>'Create SalesInvoice', 'url'=>array('create')),
	array('label'=>'View SalesInvoice', 'url'=>array('view', 'id'=>$model->salesInvoiceId)),
	array('label'=>'Manage SalesInvoice', 'url'=>array('admin')),
);
?>

<h1>Update SalesInvoice <?php echo $model->salesInvoiceId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>