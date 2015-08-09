<?php
$this->breadcrumbs=array(
	'Region2s'=>array('index'),
	$model->Cod_Reg=>array('view','id'=>$model->Cod_Reg),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Region2','url'=>array('index')),
	array('label'=>'Create Region2','url'=>array('create')),
	array('label'=>'View Region2','url'=>array('view','id'=>$model->Cod_Reg)),
	array('label'=>'Manage Region2','url'=>array('admin')),
	);
	?>

	<h1>Update Region2 <?php echo $model->Cod_Reg; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>