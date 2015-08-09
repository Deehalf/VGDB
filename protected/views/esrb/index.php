<?php
/* @var $this EsrbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Esrbs',
);

$this->menu=array(
	array('label'=>'Create Esrb', 'url'=>array('create')),
	array('label'=>'Manage Esrb', 'url'=>array('admin')),
);
?>

<h1>Esrbs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
