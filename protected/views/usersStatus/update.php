<?php
/* @var $this UsersStatusController */
/* @var $model UsersStatus */

$this->breadcrumbs=array(
	'Users Statuses'=>array('index'),
	$model->statusId=>array('view','id'=>$model->statusId),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersStatus', 'url'=>array('index')),
	array('label'=>'Create UsersStatus', 'url'=>array('create')),
	array('label'=>'View UsersStatus', 'url'=>array('view', 'id'=>$model->statusId)),
	array('label'=>'Manage UsersStatus', 'url'=>array('admin')),
);
?>

<h1>Update UsersStatus <?php echo $model->statusId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>