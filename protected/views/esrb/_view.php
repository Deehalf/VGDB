<?php
/* @var $this EsrbController */
/* @var $data Esrb */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_ESRB')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cod_ESRB), array('view', 'id'=>$data->Cod_ESRB)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Abreviacion')); ?>:</b>
	<?php echo CHtml::encode($data->Abreviacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->Clasificacion); ?>
	<br />


</div>