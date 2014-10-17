<?php
/* @var $this CatogryController */
/* @var $model Catogry */

$this->breadcrumbs=array(
	'Catogries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Catogry', 'url'=>array('index')),
	array('label'=>'Manage Catogry', 'url'=>array('admin')),
);
?>

<h1>Create Catogry</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>