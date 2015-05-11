<?php
$this->pageTitle=Yii::app()->name. ' - การจัดการ';
$this->breadcrumbs=array(
		'อัลบั้มรูปภาพ',
);

$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
//array('label'=>'รายการอุทยานแห่งชาติ','url'=>array('dataSouthnationpark/admin')),
array('label'=>'ข้อมูลอุทยานแห่งชาติ','url'=>array('dataSouthnationpark/view','id'=>$_REQUEST['id'])),
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

<h2>การจัดการอัลบั้มรูปภาพ</h2>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<?php //echo $form->label($model, 'ชื่ออุทยานแห่งชาติ'); ?>
<?php //echo $form->dropDownList($model,'data_southnationpark_id',CHtml::listData(DataSouthnationpark::model()->findAll(),'id','park_name'),
	//			array('prompt'=>'เลือกชื่ออุทยาน'),array('class'=>'span5')); ?>
<?php //echo CHtml::submitButton('ค้นหา'); ?>
<?php $this->endWidget(); ?>


<?php //echo CHtml::link('<img src="img/Sp2.png" alt="image" /><font size="3" color="800080">ค้นหา</font>','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php Yii::app()->session['data_southnationpark_id'] = $_REQUEST['id'];?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'data-southnationpark-grid',
//'dataProvider'=>$model->search(),
//'dataProvider'=>$model->search('$model=>data_southnationpark_id','search',array( 'data_southnationpark_id'=>$model->data_southnationpark_id=$datasouth->id)),
'dataProvider'=>$model->search(),
'summaryText' =>'',		
//'summaryText'=>'จำนวน {start}-{end} ทั้งหมด {count} .',
  //  'template'=>'{summary} {pager} {items} {pager}',
//'filter'=>$model,
		//'hideHeader'=>true,
'columns'=>array(
		//'id',


array(
		'name'=>'id',
		'value'=>'$this->grid->dataProvider->pagination->offset + $row + 1',
		'htmlOptions'=>array('style'=>'text-align:center;width: 50px'),
),
'nationData.park_name',
array(
		'name'=>'name',
		'type'=>'html',   // กำหนด type เป็น html
		'value'=>'CHtml::image("images/".$data->name, "รูปภาพ")',
		'htmlOptions'=>array('style'=>'max-width:170px;'),),

		//'file',
		
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
		'template'=>'{view} {delete}',
),
),
)); ?>
