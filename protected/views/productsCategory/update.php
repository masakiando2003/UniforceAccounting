<?php
/* @var $this ProductsCategoryController */
/* @var $model ProductsCategory */

$this->breadcrumbs=array(
	'Products Categories'=>array('index'),
	$model->categoryId=>array('view','id'=>$model->categoryId),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductsCategory', 'url'=>array('index')),
	array('label'=>'Create ProductsCategory', 'url'=>array('create')),
	array('label'=>'View ProductsCategory', 'url'=>array('view', 'id'=>$model->categoryId)),
	array('label'=>'Manage ProductsCategory', 'url'=>array('admin')),
);
?>

<h1>Update ProductsCategory <?php echo $model->categoryId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>