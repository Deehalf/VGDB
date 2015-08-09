<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plataforma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_Plat'); ?>
		<?php echo $form->textField($model,'Cod_Plat'); ?>
		<?php echo $form->error($model,'Cod_Plat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Plat'); ?>
		<?php echo $form->textField($model,'Nombre_Plat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Nombre_Plat'); ?>
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
		<?php echo $form->labelEx($model,'Internet'); ?>
		<?php echo $form->textField($model,'Internet',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Internet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Generacion'); ?>
		<?php echo $form->textField($model,'Generacion'); ?>
		<?php echo $form->error($model,'Generacion'); ?>
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