<?php
/* @var $this UserInfoController */
/* @var $data UserInfo */
?>

<div class="view">

	<?php echo CHtml::link("Edit", array('view', 'id'=>$data->userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middlename')); ?>:</b>
	<?php echo CHtml::encode($data->middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phoneext')); ?>:</b>
	<?php echo CHtml::encode($data->phoneext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentid')); ?>:</b>
	<?php echo CHtml::encode($data->department->find($data->departmentid)->departmentname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hiredate')); ?>:</b>
	<?php echo CHtml::encode($data->hiredate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

</div>