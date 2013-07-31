<?php
/* @var $this SalesInvoiceController */
/* @var $model SalesInvoice */

$this->breadcrumbs=array(
	'Sales Invoices'=>array('index'),
	$model->salesInvoiceId,
);

$this->menu=array(
	array('label'=>'List SalesInvoice', 'url'=>array('index')),
	array('label'=>'Create SalesInvoice', 'url'=>array('create')),
	array('label'=>'Update SalesInvoice', 'url'=>array('update', 'id'=>$model->salesInvoiceId)),
	array('label'=>'Delete SalesInvoice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salesInvoiceId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalesInvoice', 'url'=>array('admin')),
);
?>

<h1>View SalesInvoice #<?php echo $model->salesInvoiceId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salesInvoiceId',
		'invoiceNumber',
		'subject',
		'invoiceDate',
		'dueDate',
		'accountName',
		'contactName',
		'status',
		'assignedTo',
		'billingAddress',
		'billingCountry',
		'shippingAddress',
		'shippingCountry',
		'termsConditions',
		'description',
		'createdTime',
		'modifiedTime',
	),
)); ?>
