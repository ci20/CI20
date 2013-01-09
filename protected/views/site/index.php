<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
$result = "<p>" . $this->pdf2text('C:\wamp\www\CI20\protected\controllers\sample.pdf') . "</p>";
echo $result;
