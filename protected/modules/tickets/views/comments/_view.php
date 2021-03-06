<?php
/* @var $this CommentsController */
/* @var $data Comments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('commentid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->commentid), array('view', 'id'=>$data->commentid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdby')); ?>:</b>
	<?php echo CHtml::encode($data->createdby0->username); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreated')); ?>:</b>
	<?php echo CHtml::encode(date('g:i a m/d/Y', strtotime($data->datecreated))); ?>
	<br />


</div>