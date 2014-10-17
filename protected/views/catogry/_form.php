<?php
/* @var $this CatogryController */
/* @var $model Catogry */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catogry-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
		<?php echo $form->textField($model,'DESCRIPTION',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARENT_ID'); ?>
		<?php echo $form->textField($model,'PARENT_ID'); ?>
		<?php echo $form->error($model,'PARENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RANK'); ?>
		<?php echo $form->textField($model,'RANK'); ?>
		<?php echo $form->error($model,'RANK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COLOR'); ?>
		<?php echo $form->textField($model,'COLOR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'COLOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FLAG'); ?>
		<?php echo $form->textField($model,'FLAG',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FLAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
		<?php echo $form->error($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATE_DATE'); ?>
		<?php echo $form->textField($model,'CREATE_DATE'); ?>
		<?php echo $form->error($model,'CREATE_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->