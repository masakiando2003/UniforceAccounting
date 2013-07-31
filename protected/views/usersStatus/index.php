<?php
/* @var $this UsersStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Statuses',
);

$this->menu=array(
	array('label'=>'Create UsersStatus', 'url'=>array('create')),
	array('label'=>'Manage UsersStatus', 'url'=>array('admin')),
);
?>

<h1>Users Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
