<?php
/* @var $this ProductsStatusController */
/* @var $model ProductsStatus */

$this->breadcrumbs=array(
	'Products Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductsStatus', 'url'=>array('index')),
	array('label'=>'Manage ProductsStatus', 'url'=>array('admin')),
);
?>

<h1>Create ProductsStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>