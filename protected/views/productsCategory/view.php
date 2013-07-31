<?php
/* @var $this ProductsCategoryController */
/* @var $model ProductsCategory */

$this->breadcrumbs=array(
	'Products Categories'=>array('index'),
	$model->categoryId,
);

$this->menu=array(
	array('label'=>'List ProductsCategory', 'url'=>array('index')),
	array('label'=>'Create ProductsCategory', 'url'=>array('create')),
	array('label'=>'Update ProductsCategory', 'url'=>array('update', 'id'=>$model->categoryId)),
	array('label'=>'Delete ProductsCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->categoryId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductsCategory', 'url'=>array('admin')),
);
?>

<h1>View ProductsCategory #<?php echo $model->categoryId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'categoryId',
		'categoryName',
	),
)); ?>
