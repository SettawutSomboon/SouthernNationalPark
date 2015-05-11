<?php
$this->pageTitle=Yii::app()->name. ' - การจัดการ';
$this->breadcrumbs=array(
		'ประเภทอุทยานแห่งชาติ',
);

$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
array('label'=>'เพิ่มประเภทอุทยานแห่งชาติ','url'=>array('create')),
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

<h2>การจัดการประเภทอุทยานแห่งชาติ</h2>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<?php //echo $form->label($model, 'ประเภทอุทยานแห่งชาติ'); ?>
<?php //echo $form->textField($model,'category_name',array('size'=>25,'maxlength'=>45)); ?>
<?php // echo CHtml::submitButton('ค้นหา'); ?>
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
'columns'=>array(
		//array(
		//		'name'=>'id',
	//			'value'=>'$this->grid->dataProvider->pagination->offset + $row + 1',			
	//		), // this code for running number of rows
		'category_name',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
