<?php
/* @var $this CatogryController */
/* @var $model Catogry */

$this->breadcrumbs=array(
	'Catogries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Catogry', 'url'=>array('index')),
	array('label'=>'Create Catogry', 'url'=>array('create')),
	array('label'=>'View Catogry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Catogry', 'url'=>array('admin')),
);
?>

<h1>Update Catogry <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>