<?php
/* @var $this HrPolicyController */
/* @var $model HrPolicy */

$this->breadcrumbs=array(
	'HR Policies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HR Policies', 'url'=>array('index')),
	array('label'=>'Manage HR Policies', 'url'=>array('admin')),
);
?>

<h1>Create HR Policy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>