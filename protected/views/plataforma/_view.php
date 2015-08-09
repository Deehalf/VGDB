<?php
/* @var $this PlataformaController */
/* @var $data Plataforma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Plat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cod_Plat), array('view', 'id'=>$data->Cod_Plat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Plat')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Plat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Comp')); ?>:</b>
	<?php echo CHtml::encode($data->Cod_Comp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Reg')); ?>:</b>
	<?php echo CHtml::encode($data->Cod_Reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Internet')); ?>:</b>
	<?php echo CHtml::encode($data->Internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Generacion')); ?>:</b>
	<?php echo CHtml::encode($data->Generacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lanzamiento')); ?>:</b>
	<?php echo CHtml::encode($data->Lanzamiento); ?>
	<br />


</div>