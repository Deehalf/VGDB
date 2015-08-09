<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */

$this->breadcrumbs=array(
	'Videojuegos'=>array('index'),
	$model->Cod_vj=>array('view','id'=>$model->Cod_vj),
	'Update',
);

$this->menu=array(
	array('label'=>'List Videojuego', 'url'=>array('index')),
	array('label'=>'Create Videojuego', 'url'=>array('create')),
	array('label'=>'View Videojuego', 'url'=>array('view', 'id'=>$model->Cod_vj)),
	array('label'=>'Manage Videojuego', 'url'=>array('admin')),
);
?>

<h1>Update Videojuego <?php echo $model->Cod_vj; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>