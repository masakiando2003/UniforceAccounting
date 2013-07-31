<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */

$this->breadcrumbs=array(
	'Users Roles'=>array('index'),
	$model->roleId=>array('view','id'=>$model->roleId),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersRole', 'url'=>array('index')),
	array('label'=>'Create UsersRole', 'url'=>array('create')),
	array('label'=>'View UsersRole', 'url'=>array('view', 'id'=>$model->roleId)),
	array('label'=>'Manage UsersRole', 'url'=>array('admin')),
);
?>

<h1>Update UsersRole <?php echo $model->roleId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>