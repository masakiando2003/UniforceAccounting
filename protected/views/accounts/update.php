<?php
/* @var $this AccountsController */
/* @var $model Accounts */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->name=>array('view','id'=>$model->accountId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Accounts', 'url'=>array('create')),
	array('label'=>'View Accounts', 'url'=>array('view', 'id'=>$model->accountId)),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
);
?>

<h1>Update Accounts <?php echo $model->accountId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>