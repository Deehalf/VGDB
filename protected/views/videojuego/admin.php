<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */
/* Pagína de administración de contenido */

$this->breadcrumbs=array(
	'Videojuegos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Videojuego', 'url'=>array('index')),
	array('label'=>'Create Videojuego', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;  
});
$('.search-form form').submit(function(){
	$('#videojuego-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
"); /* Validación de variables de busqueda */
?>

<h1>Buscador de Videojuegos</h1>

<p>
Opcionalmente puede entrar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de sus valores de busqueda para especificar como se debe realizar la comparación.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'videojuego-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Cod_vj',
		'Nombre_vj',
                array(
                    'name'=>'Search_Plat',
                    'value'=>'$data->codPlat->Nombre_Plat'
                ),
            array(
                'name'=>'Search_Comp',
                'value'=>'$data->codComp->Nombre_Comp'
            ),
            array(
                'name'=>'Search_Reg',
                'filter'=>Region::model()->dropdown(),
                'value'=>'$data->codReg->Nombre_Reg'
            ),
            array(
                'name'=>'Search_ESRB',
                'filter'=>Esrb::model()->dropdown(),
                'value'=>'$data->codESRB->Abreviacion'
            ),
		//'Cod_Plat',
		//'Cod_Comp',
		//'Cod_Reg',
		//'Cod_ESRB',
		'DLC',
		'Num_Jugadores_Local',
		'Num_Jugadores_Online',
		'Digital',
		'Lanzamiento',
            
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
