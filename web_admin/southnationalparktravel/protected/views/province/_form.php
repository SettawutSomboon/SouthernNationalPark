<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'province-form',
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>



<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'province_name',array('class'=>'span5','maxlength'=>100)); ?>

			<br />	
		
		<?php echo $form->labelEx($model,'province_image'); ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/provinceimage/'.$model->province_image,'',array('width'=>200,'height'=>200));?>
		
	
			<br />
	
		
		<br />
		<?php //echo CHtml::image(encode($model->image, array('width'=>120,'height'=>150)));?>
		<?php echo $form->fileField($model,'province_image'); ?>
		<?php echo $form->error($model,'province_image'); ?>
<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'บันทึก')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'ยกเลิก')); ?>
		</div>

<?php $this->endWidget(); ?>
