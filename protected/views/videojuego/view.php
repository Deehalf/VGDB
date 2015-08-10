<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */

$this->breadcrumbs=array(
	'Videojuegos'=>array('index'),
	$model->Cod_vj,
);

$this->menu=array(
	array('label'=>'List Videojuego', 'url'=>array('index')),
	array('label'=>'Create Videojuego', 'url'=>array('create')),
	array('label'=>'Update Videojuego', 'url'=>array('update', 'id'=>$model->Cod_vj)),
	array('label'=>'Delete Videojuego', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_vj),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Videojuego', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->Nombre_vj; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'Cod_vj',
		//'Nombre_vj',
            array(
                'name'=>'Plataforma',
		'value'=>$model->codPlat->Nombre_Plat,
                ),
            array(
                'name'=>'Compania',
                'value'=>$model->codComp->Nombre_Comp,
                ),
            array(
                'name'=>'Region',
                'value'=>$model->codReg->Nombre_Reg,
                ),
            array(
                'name'=>'ESRB',
                'value'=>$model->codESRB->Clasificacion,
                ),
		'DLC',
		'Num_Jugadores_Local',
		'Num_Jugadores_Online',
		'Digital',
		'Lanzamiento',
	),
)); ?>
