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

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_vj'); ?>
		<?php echo $form->textField($model,'Cod_vj'); ?>
		<?php echo $form->error($model,'Cod_vj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_vj'); ?>
		<?php echo $form->textField($model,'Nombre_vj',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre_vj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Plat'); ?>
		<?php echo $form->textField($model,'Cod_Plat'); ?>
		<?php echo $form->error($model,'Cod_Plat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Comp'); ?>
		<?php echo $form->textField($model,'Cod_Comp'); ?>
		<?php echo $form->error($model,'Cod_Comp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Reg'); ?>
		<?php echo $form->textField($model,'Cod_Reg'); ?>
		<?php echo $form->error($model,'Cod_Reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_ESRB'); ?>
		<?php echo $form->textField($model,'Cod_ESRB'); ?>
		<?php echo $form->error($model,'Cod_ESRB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DLC'); ?>
		<?php echo $form->textField($model,'DLC',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'DLC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Jugadores_Local'); ?>
		<?php echo $form->textField($model,'Num_Jugadores_Local'); ?>
		<?php echo $form->error($model,'Num_Jugadores_Local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Jugadores_Online'); ?>
		<?php echo $form->textField($model,'Num_Jugadores_Online'); ?>
		<?php echo $form->error($model,'Num_Jugadores_Online'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Digital'); ?>
		<?php echo $form->textField($model,'Digital',array('size'=>2,'maxlength'=>2)); ?>
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