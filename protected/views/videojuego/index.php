<?php
/* @var $this VideojuegoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Videojuegos',
);

$this->menu=array(
	array('label'=>'Create Videojuego', 'url'=>array('create')),
	array('label'=>'Manage Videojuego', 'url'=>array('admin')),
);
?>

<h1>Videojuegos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'enableSorting' =>1,
        'sortableAttributes'=>array(
            'Al azar',
        ),
)); ?>
