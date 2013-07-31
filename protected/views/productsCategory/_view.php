<?php
/* @var $this ProductsCategoryController */
/* @var $data ProductsCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->categoryId), array('view', 'id'=>$data->categoryId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryName')); ?>:</b>
	<?php echo CHtml::encode($data->categoryName); ?>
	<br />


</div>