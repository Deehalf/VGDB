<?php
/* @var $this CompaniaController */
/* @var $data Compania */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Comp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cod_Comp), array('view', 'id'=>$data->Cod_Comp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Comp')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Comp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Reg')); ?>:</b>
	<?php echo CHtml::encode($data->Cod_Reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pais')); ?>:</b>
	<?php echo CHtml::encode($data->Pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fundacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fundacion); ?>
	<br />


</div>