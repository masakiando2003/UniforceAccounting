<?php
/* @var $this SalesInvoiceProductController */
/* @var $model SalesInvoiceProduct */

$this->breadcrumbs=array(
	'Sales Invoice Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalesInvoiceProduct', 'url'=>array('index')),
	array('label'=>'Manage SalesInvoiceProduct', 'url'=>array('admin')),
);
?>

<h1>Create SalesInvoiceProduct</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>