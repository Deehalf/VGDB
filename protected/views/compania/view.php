<?php
/* @var $this CompaniaController */
/* @var $model Compania */

$this->breadcrumbs=array(
	'Companias'=>array('index'),
	$model->Cod_Comp,
);

$this->menu=array(
	array('label'=>'List Compania', 'url'=>array('index')),
	array('label'=>'Create Compania', 'url'=>array('create')),
	array('label'=>'Update Compania', 'url'=>array('update', 'id'=>$model->Cod_Comp)),
	array('label'=>'Delete Compania', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_Comp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Compania', 'url'=>array('admin')),
);
?>

<h1>View Compania #<?php echo $model->Cod_Comp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cod_Comp',
		'Nombre_Comp',
		'Cod_Reg',
		'Pais',
		'Fundacion',
	),
)); ?>
