<?php
$this->breadcrumbs=array(
	'Region2s'=>array('index'),
	$model->Cod_Reg,
);

$this->menu=array(
array('label'=>'List Region2','url'=>array('index')),
array('label'=>'Create Region2','url'=>array('create')),
array('label'=>'Update Region2','url'=>array('update','id'=>$model->Cod_Reg)),
array('label'=>'Delete Region2','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_Reg),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Region2','url'=>array('admin')),
);
?>

<h1>View Region2 #<?php echo $model->Cod_Reg; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'Cod_Reg',
		'Nombre_Reg',
),
)); ?>
