<?php
/* @var $this AccountsIndustryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accounts Industries',
);

$this->menu=array(
	array('label'=>'Create AccountsIndustry', 'url'=>array('create')),
	array('label'=>'Manage AccountsIndustry', 'url'=>array('admin')),
);
?>

<h1>Accounts Industries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
