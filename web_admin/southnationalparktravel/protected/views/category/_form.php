<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>


<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'category_name',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'บันทึก')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'ยกเลิก')); ?>
		</div>

<?php $this->endWidget(); ?>
