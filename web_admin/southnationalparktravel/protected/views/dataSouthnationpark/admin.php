<?php
$this->pageTitle=Yii::app()->name. ' - การจัดการ';
$this->breadcrumbs=array(
		'รายการอุทยานแห่งชาติ',
);

$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
array('label'=>'เพิ่มอุทยานแห่งชาติ','url'=>array('create')),
array('label'=>'จัดการอัลบั้มรูปภาพ','url'=>array('images/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('data-southnationpark-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>การจัดการข้อมูลอุทยานแห่งชาติ</h2>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<?php //echo $form->label($model, 'ชื่ออุทยานแห่งชาติ'); ?>
<?php //echo $form->textField($model,'park_name',array('size'=>25,'maxlength'=>45)); ?>
<?php //echo CHtml::submitButton('ค้นหา'); ?>
<?php $this->endWidget(); ?>

<?php echo CHtml::link('<img src="img/Sp2.png" alt="image" /><font size="3" color="800080">ค้นหา</font>','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'data-southnationpark-grid',
'dataProvider'=>$model->search(),
'summaryText' =>'',		
//'summaryText'=>'จำนวน {start}-{end} ทั้งหมด {count} .',
  //  'template'=>'{summary} {pager} {items} {pager}',
//'filter'=>$model,
		//'hideHeader'=>true,
'columns'=>array(
		//'id',

//'category.category_name',
array('name'=>'category.category_name',
				'htmlOptions'=>array('style'=>'text-align:left;width: 350px')),
		//'park_name',

		array('name'=>'park_name',
				'htmlOptions'=>array('style'=>'text-align:left;width: 400px')),
//'activity',
/*
		'general',
		'topography',
		'climate',
		'plant',
	
	
		'animal',
		*/
		//'image',
		
		array(
				'name'=>'image',
				'type'=>'html',   // กำหนด type เป็น html
				'value'=>'CHtml::image("images/".$data->image, "รูปภาพ")',
					'htmlOptions'=>array('style'=>'max-width:170px;'),),


		


		array('name'=>'latitude',
				'htmlOptions'=>array('style'=>'text-align:center;width: 80px')),

				array('name'=>'longtitude',
				'htmlOptions'=>array('style'=>'text-align:center;width: 80px')),

				array('name'=>'province.province_name',
				'htmlOptions'=>array('style'=>'text-align:center;width: 80px')),

				
		//'latitude',
		//'longtitude',
		//'province.province_name',
		//'category.category_name',	
		/*	
array(
	'name'=>'province.province_image',
		'type'=>'html',   // กำหนด type เป็น html
		'value'=>'CHtml::image("provinceimage/".$data->province->province_image, "รูปภาพ")',
		'htmlOptions'=>array('style'=>'max-width:120px;'),),
*/
		
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
