<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_Plat'); ?>
		<?php echo $form->textField($model,'Cod_Plat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Plat'); ?>
		<?php echo $form->textField($model,'Nombre_Plat',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Comp'); ?>
		<?php echo $form->textField($model,'Cod_Comp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Reg'); ?>
		<?php echo $form->textField($model,'Cod_Reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Internet'); ?>
		<?php echo $form->textField($model,'Internet',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Generacion'); ?>
		<?php echo $form->textField($model,'Generacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lanzamiento'); ?>
		<?php echo $form->textField($model,'Lanzamiento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->