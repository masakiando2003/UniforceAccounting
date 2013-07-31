<?php
/* @var $this UsersStatusController */
/* @var $model UsersStatus */

$this->breadcrumbs=array(
	'Users Statuses'=>array('index'),
	$model->statusId,
);

$this->menu=array(
	array('label'=>'List UsersStatus', 'url'=>array('index')),
	array('label'=>'Create UsersStatus', 'url'=>array('create')),
	array('label'=>'Update UsersStatus', 'url'=>array('update', 'id'=>$model->statusId)),
	array('label'=>'Delete UsersStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->statusId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersStatus', 'url'=>array('admin')),
);
?>

<h1>View UsersStatus #<?php echo $model->statusId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'statusId',
		'statusName',
	),
)); ?>
