<?php
/* @var $this CatogryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Catogries',
);

$this->menu=array(
	array('label'=>'Create Catogry', 'url'=>array('create')),
	array('label'=>'Manage Catogry', 'url'=>array('admin')),
);
?>

<h1>Catogries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
