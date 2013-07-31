<?php
/* @var $this AccountsIndustryController */
/* @var $model AccountsIndustry */

$this->breadcrumbs=array(
	'Accounts Industries'=>array('index'),
	$model->industryId,
);

$this->menu=array(
	array('label'=>'List AccountsIndustry', 'url'=>array('index')),
	array('label'=>'Create AccountsIndustry', 'url'=>array('create')),
	array('label'=>'Update AccountsIndustry', 'url'=>array('update', 'id'=>$model->industryId)),
	array('label'=>'Delete AccountsIndustry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->industryId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountsIndustry', 'url'=>array('admin')),
);
?>

<h1>View AccountsIndustry #<?php echo $model->industryId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'industryId',
		'industryName',
	),
)); ?>
