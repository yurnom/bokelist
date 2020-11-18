<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Item', 'url'=>array('index')),
	array('label'=>'Manage Item', 'url'=>array('admin')),
);
?>

<h1>Create Item</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>