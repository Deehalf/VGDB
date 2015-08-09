<?php
$this->breadcrumbs=array(
	'Region2s',
);

$this->menu=array(
array('label'=>'Create Region2','url'=>array('create')),
array('label'=>'Manage Region2','url'=>array('admin')),
);
?>

<h1>Region2s</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
