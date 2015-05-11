<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - เช้าใช้งานระบบ';
$this->breadcrumbs=array(
	'เช้าใช้งานระบบ',
);
?>
<center>

<font size="4" color="800080">เข้าสู่การจัดการระบบ</font>
</center>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<center>
<table >
	<tr>

	<div class="row">
		<?php echo $form->textField($model,'username', array('placeholder' => 'ผู้ใช้งาน')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->passwordField($model,'password' ,array('placeholder' => 'รหัสผ่าน')); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

		<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'เข้าสู่ระบบ')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'ยกเลิก')); ?>
		</div>
	</tr>
</table>
</center>
<?php $this->endWidget(); ?>
</div><!-- form -->
