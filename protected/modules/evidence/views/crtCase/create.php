<?php
/* @var $this CrtCaseController */
/* @var $model CrtCase */

$this->pageTitle = Yii::app()->name . ' - Court Cases';

$this->breadcrumbs=array(
	'Court Case'=>array('index'),
	'Create',
);

$this->menu2=array(
	array('label'=>'List Court Cases', 'url'=>array('index')),
	array('label'=>'Manage Court Cases', 'url'=>array('admin')),
);
?>

<h1>Create Court Case</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>