<?php
/* @var $this CaseSummaryController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Case Files';

$this->breadcrumbs=array(
	'Case Files',
);

$this->menu2=array(
	array('label'=>'Create Case File', 'url'=>array('create')),
	array('label'=>'Manage Case Files', 'url'=>array('admin')),
);
?>

<h1>Case Files</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
