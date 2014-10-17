<?php
/* @var $this CatogryController */
/* @var $data Catogry */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PARENT_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RANK')); ?>:</b>
	<?php echo CHtml::encode($data->RANK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COLOR')); ?>:</b>
	<?php echo CHtml::encode($data->COLOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FLAG')); ?>:</b>
	<?php echo CHtml::encode($data->FLAG); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATE_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATE_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	*/ ?>

</div>