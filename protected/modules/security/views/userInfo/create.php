<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'create-form',
	'enableAjaxValidation'=>false,
));

$this->breadcrumbs=array(
	'User Management'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Create New User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'departments'=>$departments)); ?>

<?php $this->endWidget(); ?>
