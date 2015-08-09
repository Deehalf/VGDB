<?php
/* @var $this EsrbController */
/* @var $model Esrb */

$this->breadcrumbs=array(
	'Esrbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Esrb', 'url'=>array('index')),
	array('label'=>'Manage Esrb', 'url'=>array('admin')),
);
?>

<h1>Create Esrb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>