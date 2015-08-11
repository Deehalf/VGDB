<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'videojuego-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php /*<div class="row">
		<?php echo $form->labelEx($model,'Cod_vj'); ?>
		<?php echo $form->textField($model,'Cod_vj'); ?>
		<?php echo $form->error($model,'Cod_vj'); ?>
	</div>*/; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_vj'); ?>
		<?php echo $form->textField($model,'Nombre_vj',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre_vj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Plat'); ?>
		<?php echo $form->dropDownList($model,'Cod_Plat',Plataforma::dropdown(),array('empty'=>'Seleccione Plataforma')); ?>
		<?php echo $form->error($model,'Cod_Plat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Comp'); ?>
		<?php echo $form->dropDownList($model,'Cod_Comp',Compania::dropdown(),array('empty'=>'Seleccione Compañia')); ?>
		<?php echo $form->error($model,'Cod_Comp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Reg'); ?>
		<?php echo $form->dropDownList($model,'Cod_Reg',Region::dropdown(),array('empty'=>'Seleccione Región')); ?>
		<?php echo $form->error($model,'Cod_Reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_ESRB'); ?>
		<?php echo $form->dropDownList($model,'Cod_ESRB',ESRB::dropdown(),array('empty'=>'Clasificación')); ?>
		<?php echo $form->error($model,'Cod_ESRB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DLC'); ?>
		<?php echo $form->dropDownList($model,'DLC',array('Si' => 'Sí', 'No' => 'No')); ?>
		<?php echo $form->error($model,'DLC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Jugadores_Local'); ?>
		<?php echo $form->dropDownList($model,'Num_Jugadores_Local',array('0' => 'Solo jugable Online', '1' => '1','2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '8' => '8', '9' => '9 o más')); ?>
		<?php echo $form->error($model,'Num_Jugadores_Local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Jugadores_Online'); ?>
		<?php echo $form->dropdownList($model,'Num_Jugadores_Online',array('0' => 'Sin modo Online', '1' => '1','2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '8' => '8', '9' => '9 o más')); ?>
		<?php echo $form->error($model,'Num_Jugadores_Online'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Digital'); ?>
		<?php echo $form->dropDownList($model,'Digital',array('Si' => 'Sí', 'No' => 'No')); ?>
		<?php echo $form->error($model,'Digital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lanzamiento'); ?>
		<?php echo $form->textField($model,'Lanzamiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Lanzamiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->