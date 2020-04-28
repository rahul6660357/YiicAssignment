<?php
$this->pageTitle=Yii::app()->name . ' - Forms Demo';
$this->breadcrumbs=array(
	'formsdemo',
);

use yii\helpers\html;
use yii\widgets\activeform;
?>

<?php $form = activeform :: begin(); ?>
<?= $form->field($model,'firstname'); ?>
<?= $form->field($model,'lastname'); ?>

<?= html:: submitbutton('submit',['class'=>'btn btn-success']); ?>



