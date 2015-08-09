<?php
/* @var $this EsrbController */
/* @var $model Esrb */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_ESRB'); ?>
		<?php echo $form->textField($model,'Cod_ESRB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Abreviacion'); ?>
		<?php echo $form->textField($model,'Abreviacion',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Clasificacion'); ?>
		<?php echo $form->textField($model,'Clasificacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->