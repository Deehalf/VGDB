<?php
/* @var $this CompaniaController */
/* @var $model Compania */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_Comp'); ?>
		<?php echo $form->textField($model,'Cod_Comp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Comp'); ?>
		<?php echo $form->textField($model,'Nombre_Comp',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Reg'); ?>
		<?php echo $form->textField($model,'Cod_Reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pais'); ?>
		<?php echo $form->textField($model,'Pais',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fundacion'); ?>
		<?php echo $form->textField($model,'Fundacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->