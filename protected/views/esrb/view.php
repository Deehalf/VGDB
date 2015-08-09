<?php
/* @var $this EsrbController */
/* @var $model Esrb */

$this->breadcrumbs=array(
	'Esrbs'=>array('index'),
	$model->Cod_ESRB,
);

$this->menu=array(
	array('label'=>'List Esrb', 'url'=>array('index')),
	array('label'=>'Create Esrb', 'url'=>array('create')),
	array('label'=>'Update Esrb', 'url'=>array('update', 'id'=>$model->Cod_ESRB)),
	array('label'=>'Delete Esrb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_ESRB),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Esrb', 'url'=>array('admin')),
);
?>

<h1>View Esrb #<?php echo $model->Cod_ESRB; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cod_ESRB',
		'Abreviacion',
		'Clasificacion',
	),
)); ?>
