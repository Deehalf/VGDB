<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */

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
");
?>

<h1>Buscador de Videojuegos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
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
		'Cod_Plat',
		'Cod_Comp',
		'Cod_Reg',
		'Cod_ESRB',
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
