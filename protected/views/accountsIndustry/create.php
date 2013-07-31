<?php
/* @var $this AccountsIndustryController */
/* @var $model AccountsIndustry */

$this->breadcrumbs=array(
	'Accounts Industries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountsIndustry', 'url'=>array('index')),
	array('label'=>'Manage AccountsIndustry', 'url'=>array('admin')),
);
?>

<h1>Create AccountsIndustry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>