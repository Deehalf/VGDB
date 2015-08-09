<?php
/* @var $this EsrbController */
/* @var $model Esrb */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'esrb-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_ESRB'); ?>
		<?php echo $form->textField($model,'Cod_ESRB'); ?>
		<?php echo $form->error($model,'Cod_ESRB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Abreviacion'); ?>
		<?php echo $form->textField($model,'Abreviacion',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Abreviacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clasificacion'); ?>
		<?php echo $form->textField($model,'Clasificacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Clasificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->