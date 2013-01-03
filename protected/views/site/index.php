<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
$obj = $this->widget('application.extensions.dashboard.dashboard', array(
    'divColumns' => array('column1', 'column2', 'column3'),// Css class names of DIV columns
    'dashHeader' => array('show'=>true, 'title'=>'Dashboard')// Dashboard header options
));
?>

<div class="column1">      
    <?php $obj->addPortlet('sample', 'Test', 'Test');// portlet id, name, content?>
</div>

<div class="column2">
	<?php $obj->addPortlet('makeuser', 'Create User',$this->widget('UserCreateWidget', array(), true));?>
</div>

<div class="column3">
	
</div>

<?php $obj->end()?>
