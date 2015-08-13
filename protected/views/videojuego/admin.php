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
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
or <b>=</b>) al inicio de los valores de busqueda "numero" y "Lanzamiento" para especificar como se debe realizar la comparación.
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
                'filter'=>array('1' => 'Norte America','2' => 'Sur America', '3' => 'Europa Oeste', '4' => 'Europa Este', '5' => 'Medio Este - Africa', '6' => 'Asia', '7' => 'Oceania'),//Region::model()->dropdown(),
                'value'=>'$data->codReg->Nombre_Reg'
            ),
            array(
                'name'=>'Search_ESRB',
                'filter'=>array('1' => 'Early Childhood','2' => 'Everyone', '3' => 'Everyone+10', '4' => 'Teen', '5' => 'Mature 17+', '6' => 'Adults only 18+'),//Esrb::model()->dropdown(),
                'value'=>'$data->codESRB->Clasificacion'
            ),
		//'Cod_Plat',
		//'Cod_Comp',
		//'Cod_Reg',
		//'Cod_ESRB',
            array(
                'name'=>'DLC',
                'filter' => array('Si' => 'Sí', 'No' => 'No')
            ),
            array(
                'name'=>'Num_Jugadores_Local',
                'filter'=> array('1' => '1','2' => '2', '3' => '3', '4' => '4', '>=5' => '5 o más')
            ),
            array(
                'name'=>'Num_Jugadores_Online',
                'filter'=> array('1' => '1','2' => '2', '3' => '3', '4' => '4', '>=5' => '5 o más')
            ),
            array(
                'name'=>'Digital',
                'filter' => array('Si' => 'Sí', 'No' => 'No')
            ),
		//'DLC',
		//'Num_Jugadores_Local',
		//'Num_Jugadores_Online',
		//'Digital',
		'Lanzamiento',
            
		/*array(
			'class'=>'CButtonColumn',
		),*/
                array(
                    'class'=>'CButtonColumn',
                    'template' => '{view} {update} {delete} {pdf}',
                    'buttons'=>array(
                        'pdf' => array(
                            'label'=>'Generar PDF', 
                            'url'=>"CHtml::normalizeUrl(array('crearpdf', 'id'=>\$data->Cod_vj))",
                            'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                            'options' => array('class'=>'pdf'),
      ),
   ),
),

            
	),
)); ?>
