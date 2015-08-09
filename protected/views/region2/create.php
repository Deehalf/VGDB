<?php
$this->breadcrumbs=array(
	'Region2s'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Region2','url'=>array('index')),
array('label'=>'Manage Region2','url'=>array('admin')),
);
?>

<h1>Create Region2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>