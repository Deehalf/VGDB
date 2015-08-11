<?php
/* @var $this VideojuegoController */
/* @var $model Videojuego */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_vj'); ?>
		<?php echo $form->textField($model,'Cod_vj'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_vj'); ?>
		<?php echo $form->textField($model,'Nombre_vj',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Plat'); ?>
		<?php echo $form->textField($model,'Cod_Plat',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Comp'); ?>
		<?php echo $form->textField($model,'Cod_Comp',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Reg'); ?>
		<?php echo $form->textField($model,'Cod_Reg',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_ESRB'); ?>
		<?php echo $form->textField($model,'Cod_ESRB',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DLC'); ?>
		<?php echo $form->textField($model,'DLC',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Jugadores_Local'); ?>
		<?php echo $form->textField($model,'Num_Jugadores_Local'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Jugadores_Online'); ?>
		<?php echo $form->textField($model,'Num_Jugadores_Online'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Digital'); ?>
		<?php echo $form->textField($model,'Digital',array('size'=>2,'maxlength'=>2)); ?>
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