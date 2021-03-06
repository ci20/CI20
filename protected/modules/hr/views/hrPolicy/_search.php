<?php
/* @var $this HrPolicyController */
/* @var $model HrPolicy */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'policyid'); ?>
		<?php echo $form->textField($model,'policyid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'policy'); ?>
		<?php echo $form->textField($model,'policy',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->