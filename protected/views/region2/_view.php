<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Reg')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cod_Reg),array('view','id'=>$data->Cod_Reg)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Reg')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Reg); ?>
	<br />


</div>