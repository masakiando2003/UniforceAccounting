<?php
/* @var $this UsersStatusController */
/* @var $model UsersStatus */

$this->breadcrumbs=array(
	'Users Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersStatus', 'url'=>array('index')),
	array('label'=>'Manage UsersStatus', 'url'=>array('admin')),
);
?>

<h1>Create UsersStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>