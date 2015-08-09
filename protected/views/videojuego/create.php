<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */

$this->breadcrumbs=array(
	'Videojuegos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Videojuego', 'url'=>array('index')),
	array('label'=>'Manage Videojuego', 'url'=>array('admin')),
);
?>

<h1>Create Videojuego</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>