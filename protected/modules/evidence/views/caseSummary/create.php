<?php
/* @var $this CaseSummaryController */
/* @var $summary CaseSummary */
/* @var $defendant Defendant */
/* @var $case CrtCase */
/* @var $attorney Attorney */

$this->pageTitle = Yii::app()->name . ' - Case Files';

$this->breadcrumbs=array(
	'Case File'=>array('index'),
	'Create',
);

$this->menu2=array(
	array('label'=>'List Case Files', 'url'=>array('index')),
	array('label'=>'Manage Case Files', 'url'=>array('admin')),
);
?>

<h1>Create Case File</h1>

<?php echo $this->renderPartial('_form', array(
	'summary' => $summary, 
	'defendant' => $defendant, 
	'case' => $case, 
	'attorney' => $attorney)); ?>