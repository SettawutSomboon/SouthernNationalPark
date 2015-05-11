<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'province_name',array('class'=>'span5','maxlength'=>100)); ?>

		<?php //echo $form->textFieldRow($model,'province_image',array('class'=>'span5','maxlength'=>45)); ?>

<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'ค้นหา')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'รีเซ็ต')); ?>
	</div>

<?php $this->endWidget(); ?>
