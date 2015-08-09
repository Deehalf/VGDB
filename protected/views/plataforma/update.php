<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */

$this->breadcrumbs=array(
	'Plataformas'=>array('index'),
	$model->Cod_Plat=>array('view','id'=>$model->Cod_Plat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plataforma', 'url'=>array('index')),
	array('label'=>'Create Plataforma', 'url'=>array('create')),
	array('label'=>'View Plataforma', 'url'=>array('view', 'id'=>$model->Cod_Plat)),
	array('label'=>'Manage Plataforma', 'url'=>array('admin')),
);
?>

<h1>Update Plataforma <?php echo $model->Cod_Plat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>