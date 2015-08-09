<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */

$this->breadcrumbs=array(
	'Plataformas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Plataforma', 'url'=>array('index')),
	array('label'=>'Manage Plataforma', 'url'=>array('admin')),
);
?>

<h1>Create Plataforma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>