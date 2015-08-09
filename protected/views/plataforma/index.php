<?php
/* @var $this PlataformaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plataformas',
);

$this->menu=array(
	array('label'=>'Create Plataforma', 'url'=>array('create')),
	array('label'=>'Manage Plataforma', 'url'=>array('admin')),
);
?>

<h1>Plataformas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
