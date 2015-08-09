<?php
/* @var $this CompaniaController */
/* @var $model Compania */

$this->breadcrumbs=array(
	'Companias'=>array('index'),
	$model->Cod_Comp=>array('view','id'=>$model->Cod_Comp),
	'Update',
);

$this->menu=array(
	array('label'=>'List Compania', 'url'=>array('index')),
	array('label'=>'Create Compania', 'url'=>array('create')),
	array('label'=>'View Compania', 'url'=>array('view', 'id'=>$model->Cod_Comp)),
	array('label'=>'Manage Compania', 'url'=>array('admin')),
);
?>

<h1>Update Compania <?php echo $model->Cod_Comp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>