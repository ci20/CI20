<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($this->getModel()); ?>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'firstname'); ?>
		<?php echo $form->textField($this->getModel(),'firstname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($this->getModel(),'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'lastname'); ?>
		<?php echo $form->textField($this->getModel(),'lastname',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($this->getModel(),'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'middlename'); ?>
		<?php echo $form->textField($this->getModel(),'middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($this->getModel(),'middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'username'); ?>
		<?php echo $form->textField($this->getModel(),'username',array('size'=>41,'maxlength'=>41)); ?>
		<?php echo $form->error($this->getModel(),'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'email'); ?>
		<?php echo $form->textField($this->getModel(),'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($this->getModel(),'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'phoneext'); ?>
		<?php echo $form->textField($this->getModel(),'phoneext'); ?>
		<?php echo $form->error($this->getModel(),'phoneext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'departmentid'); ?>
		<?php echo $form->dropDownList($this->getModel(),'departmentid', $this->getDepartments()); ?>
		<?php echo $form->error($this->getModel(),'departmentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($this->getModel(),'hiredate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
			array(
				'model' => $this->getModel(),
				'attribute' => 'hiredate',
				'options' => array(
					'showAnim' => 'fold',
					'dateFormat' => 'yy-mm-dd', 
					'defaultDate' => $this->getModel()->hiredate,
					'changeYear' => true,
					'changeMonth' => true,
				),
			));
		?>
		<?php echo $form->error($this->getModel(),'hiredate'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($this->getModel()->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->