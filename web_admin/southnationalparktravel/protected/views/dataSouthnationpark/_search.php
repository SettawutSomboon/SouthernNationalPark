<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


		<?php echo $form->textFieldRow($model,'park_name',array('class'=>'span5','maxlength'=>1000)); ?>
		<?php echo $form->textFieldRow($model,'activity',array('class'=>'span5','maxlength'=>1000)); ?>
		<?php //echo $form->textFieldRow($model,'plant',array('class'=>'span5','maxlength'=>1000)); ?>
		<?php //echo $form->textFieldRow($model,'animal',array('class'=>'span5','maxlength'=>1000)); ?>
		
		
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','category_name'),
				array('prompt'=>'เลือก ประเภทอุทยาน'),array('class'=>'span5')); ?>
				
		<?php echo $form->labelEx($model,'province_id'); ?>
		<?php echo $form->dropDownList($model,'province_id',CHtml::listData(Province::model()->findAll(),'id','province_name'),
				array('prompt'=>'เลือก จังหวัด'),array('class'=>'span5')); ?>

	<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'ค้นหา')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'รีเซ็ต')); ?>
	</div>

<?php $this->endWidget(); ?>
