<?php
/* @var $this AttorneyController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Attorneys';

$this->breadcrumbs=array(
	'Attorneys',
);

$this->menu2=array(
	array('label'=>'Create Attorney', 'url'=>array('create')),
	array('label'=>'Manage Attorneys', 'url'=>array('admin')),
);
?>

<h1>Attorneys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
