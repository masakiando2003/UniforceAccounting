<?php
/* @var $this ProductsStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products Statuses',
);

$this->menu=array(
	array('label'=>'Create ProductsStatus', 'url'=>array('create')),
	array('label'=>'Manage ProductsStatus', 'url'=>array('admin')),
);
?>

<h1>Products Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
