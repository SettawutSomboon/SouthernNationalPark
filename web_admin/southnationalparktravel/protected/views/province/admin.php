<?php



$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'รายการจังหวัด',
);

$this->menu=array(
//array('label'=>'List Province','url'=>array('index')),
array('label'=>'เพิ่มจังหวัด','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('province-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>จัดการข้อมูลจังหวัด</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<?php //echo $form->label($model, 'ชื่อจังหวัด'); ?>
<?php // echo $form->textField($model,'province_name',array('size'=>25,'maxlength'=>45)); ?>
<?php //echo CHtml::submitButton('ค้นหา'); ?>

<?php $this->endWidget(); ?>
<?php echo CHtml::link('<img src="img/Sp2.png" alt="image" /><font size="3" color="800080">ค้นหา</font>','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'province-grid',
'dataProvider'=>$model->search(),
//'filter'=>$model,
		'summaryText' =>'',
'columns'=>array(
		array(
		'name'=>'id',
		'value'=>'$this->grid->dataProvider->pagination->offset + $row + 1',
			'htmlOptions'=>array('style'=>'text-align:center;width: 50px'),
), // this code for running number of rows
'province_name',
		array(
				'name'=>'province_image',
				'type'=>'html',   // กำหนด type เป็น html
				'value'=>'CHtml::image("provinceimage/".$data->province_image, "รูปภาพ")',
				'htmlOptions'=>array('style'=>'width:100px;'),),

array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
