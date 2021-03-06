<?php
/* @var $this HrPolicyController */
/* @var $model HrPolicy */

$this->pageTitle = Yii::app()->name . ' - Manage HR Policies';

$this->breadcrumbs=array(
	'HR Policies'=>array('index'),
	'Manage',
);

$this->menu2=array(
	array('label'=>'List HR Policies', 'url'=>array('index')),
	array('label'=>'Create HR Policy', 'url'=>array('createpolicy')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('hr-policy-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage HR Policies</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hr-policy-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'policyid',
		'policy',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view} {update} {delete}',
			'buttons'=>array(
				'update'=>array(
					'url'=>'Yii::app()->createUrl("hr/hrpolicy/updatePolicy", array("id"=>$data->policyid))',
				),
			),
		),
	),
)); ?>
