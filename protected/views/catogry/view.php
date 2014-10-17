<?php
/* @var $this CatogryController */
/* @var $model Catogry */

$this->breadcrumbs=array(
	'Catogries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Catogry', 'url'=>array('index')),
	array('label'=>'Create Catogry', 'url'=>array('create')),
	array('label'=>'Update Catogry', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Catogry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Catogry', 'url'=>array('admin')),
);
?>

<h1>View Catogry #<?php echo $model->id; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'DESCRIPTION',
		'PARENT_ID',
		'RANK',
		'COLOR',
		'FLAG',
		'USER_ID',
		'CREATE_DATE',
		'STATUS',
	),
)); ?>
