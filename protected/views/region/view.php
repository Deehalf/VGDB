<?php
/* @var $this RegionController */
/* @var $model Region */

$this->breadcrumbs=array(
	'Regions'=>array('index'),
	$model->Cod_Reg,
);

$this->menu=array(
	array('label'=>'List Region', 'url'=>array('index')),
	array('label'=>'Create Region', 'url'=>array('create')),
	array('label'=>'Update Region', 'url'=>array('update', 'id'=>$model->Cod_Reg)),
	array('label'=>'Delete Region', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_Reg),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Region', 'url'=>array('admin')),
);
?>

<h1>View Region #<?php echo $model->Cod_Reg; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cod_Reg',
		'Nombre_Reg',
	),
)); ?>
