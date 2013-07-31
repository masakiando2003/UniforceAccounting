<?php
/* @var $this ProductsCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products Categories',
);

$this->menu=array(
	array('label'=>'Create ProductsCategory', 'url'=>array('create')),
	array('label'=>'Manage ProductsCategory', 'url'=>array('admin')),
);
?>

<h1>Products Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
