<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id' => 'upload-image-form',
		'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'),
	//'enableAjaxValidation'=>false,
)); ?>



<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'park_name',array('class'=>'span5','maxlength'=>100)); ?>
	
	<?php echo $form->labelEx($model,'activity'); ?>
	<?php echo $form->textArea($model, 'activity', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>
	
	<?php echo $form->labelEx($model,'general'); ?>
	<?php echo $form->textArea($model, 'general', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>
	
	<?php echo $form->labelEx($model,'topography'); ?>
	<?php echo $form->textArea($model, 'topography', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

	<?php echo $form->labelEx($model,'climate'); ?>
	<?php echo $form->textArea($model, 'climate', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

	<?php echo $form->labelEx($model,'plant'); ?>
	<?php echo $form->textArea($model, 'plant', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

	<?php echo $form->labelEx($model,'animal'); ?>
	<?php echo $form->textArea($model, 'animal', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>

		<br />
	
		
		<?php //echo $form->labelEx($model,'image'); ?>
		<?php //echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->image,'',array('width'=>200,'height'=>200));?>
		

		
		<br />
		<?php //echo CHtml::image(encode($model->image, array('width'=>120,'height'=>150)));?>
		
		  <div class="row">


    </div>
		<?php //echo $form->fileField($model,'image'); ?>
		<?php // echo $form->error($model,'image'); ?>
		<?php //echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->image,'',array('style'=>'max-width:300px;'));?>
		
		<p><?php echo $form->labelEx($model, 'image'); ?></p>
        <?php $this->widget('CMultiFileUpload', array(
            'model' => $model,
            'attribute' => 'image', // ชื่อ Field ที่ต้องการเก็บรูปภาพ
            'max' => 5, // จำนวนสูงสุดที่สามารถอัพโหลดเข้าไปได้
            'accept' => 'gif|jpg|jpng|png', // นามสกุลไฟล์
            'remove' => '[ลบไฟล์]', // ข้อความแสดง เมื่อต้องการลบไฟล์
            'duplicate' => 'พบไฟล์รูปภาพซ้ำ!', // ข้อความแจ้งเตือน กรณีอัพโหลดไฟล์ซ้ำ
            // ข้อความแจ้งเตือน กรณีอัพโหลดไฟล์ไม่ถูกต้อง
            'denied' => 'นามสกุลไฟล์รูปภาพไม่ถูกต้อง (GIF,JPG,JPNG,PNG)',
            'options' => array(
                'onFileSelect' => 'function(){;
                    // #upload-image-form อย่าลืมเปลี่ยนชื่อฟอร์ม
                    var files = $("#upload-image-form input[type=file]").length;            
                    // #upload-image-form อย่าลืมเปลี่ยนชื่อฟอร์ม
                    var size = $("#upload-image-form input[type=file]")[(files-1)].files[0].size;   
                    if(size >= 1024*1024*5){  // 5 คือ จำนวนหน่วย MB
                        // ข้อความแจ้งเตือน กรณีขนาดไฟล์เกินกำหนด
                        alert("สามารถอัพโหลดไฟล์รูปภาพได้ไม่เกิน \"5MB\" เท่านั้น");    
                        return false;
                    } 
                }'
            ),
        )); ?>
        <p><?php echo $form->error($model, 'image'); ?></p>
<br />
<br />
	<?php echo $form->labelEx($model,'address'); ?>
	<?php echo $form->textArea($model, 'address', array('class'=>'span5', 'rows' => 4, 'cols' => 50)); ?>
	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>10)); ?>
	

	<?php echo $form->textFieldRow($model,'latitude',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'longtitude',array('class'=>'span5')); ?>
	

	<?php echo $form->labelEx($model,'province_id'); ?>
	<?php echo $form->dropDownList($model,'province_id',CHtml::listData(Province::model()->findAll(),'id','province_name'),
				array('prompt'=>'เลือก จังหวัด'),array('class'=>'span5')); ?>
	
	<?php echo $form->labelEx($model,'category_id'); ?>
	<?php echo $form->dropDownList($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','category_name'),
				array('prompt'=>'เลือก ประเภทอุทยาน'),array('class'=>'span5')); ?>


	<div class="form-actions">
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'บันทึก')); ?>
		    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'รีเซ็ต')); ?>
		</div>

<?php $this->endWidget(); ?>
