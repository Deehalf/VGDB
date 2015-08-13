<?php
/* @var $this VideojuegoController */
/* @var $data Videojuego */
/* Esta vista corresponde a la apariencia principal de la lista de Videojuegos */
?>

<div class="media">
    
    <div class="media-body">
        <h1 class="media-heading">
            <?php echo CHtml::link(CHtml::encode($data->Nombre_vj), array('view', 'id'=>$data->Cod_vj)); ?>
        </h1>
	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Plat')); ?>:</b>
	<?php echo CHtml::encode($data->codPlat->Nombre_Plat);  //La variable $data es instancia del modelo :3 ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Comp')); ?>:</b>
	<?php echo CHtml::encode($data->codComp->Nombre_Comp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Reg')); ?>:</b>
	<?php echo CHtml::encode($data->codReg->Nombre_Reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_ESRB')); ?>:</b>
	<?php echo CHtml::encode($data->codESRB->Clasificacion,', ',$data->codESRB->Abreviacion); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DLC')); ?>:</b>
	<?php echo CHtml::encode($data->DLC); ?>
	<br />

	<b> <?php echo CHtml::encode($data->getAttributeLabel('Num_Jugadores_Local')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Jugadores_Local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Jugadores_Online')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Jugadores_Online); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Digital')); ?>:</b>
	<?php echo CHtml::encode($data->Digital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lanzamiento')); ?>:</b>
	<?php echo CHtml::encode($data->Lanzamiento); ?>
	<br />
*/?>

</div>