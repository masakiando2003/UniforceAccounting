<?php
/* @var $this ProductsCategoryController */
/* @var $model ProductsCategory */

$this->breadcrumbs=array(
	'Products Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductsCategory', 'url'=>array('index')),
	array('label'=>'Manage ProductsCategory', 'url'=>array('admin')),
);
?>

<h1>Create ProductsCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>