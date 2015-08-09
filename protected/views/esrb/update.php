<?php
/* @var $this EsrbController */
/* @var $model Esrb */

$this->breadcrumbs=array(
	'Esrbs'=>array('index'),
	$model->Cod_ESRB=>array('view','id'=>$model->Cod_ESRB),
	'Update',
);

$this->menu=array(
	array('label'=>'List Esrb', 'url'=>array('index')),
	array('label'=>'Create Esrb', 'url'=>array('create')),
	array('label'=>'View Esrb', 'url'=>array('view', 'id'=>$model->Cod_ESRB)),
	array('label'=>'Manage Esrb', 'url'=>array('admin')),
);
?>

<h1>Update Esrb <?php echo $model->Cod_ESRB; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>