<?php
/* @var $this AccountsIndustryController */
/* @var $model AccountsIndustry */

$this->breadcrumbs=array(
	'Accounts Industries'=>array('index'),
	$model->industryId=>array('view','id'=>$model->industryId),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountsIndustry', 'url'=>array('index')),
	array('label'=>'Create AccountsIndustry', 'url'=>array('create')),
	array('label'=>'View AccountsIndustry', 'url'=>array('view', 'id'=>$model->industryId)),
	array('label'=>'Manage AccountsIndustry', 'url'=>array('admin')),
);
?>

<h1>Update AccountsIndustry <?php echo $model->industryId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>