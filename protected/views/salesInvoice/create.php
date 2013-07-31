<?php
/* @var $this SalesInvoiceController */
/* @var $model SalesInvoice */

$this->breadcrumbs=array(
	'Sales Invoices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesInvoice', 'url'=>array('index')),
	array('label'=>'Manage SalesInvoice', 'url'=>array('admin')),
);
?>

<h1>Create SalesInvoice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>