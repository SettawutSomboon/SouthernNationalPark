<?php


$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'จังหวัด'=>array('admin'),
		$model->nationData->park_name,
);


$this->menu=array(
//array('label'=>'List Province','url'=>array('index')),
//array('label'=>'เพิ่มจังหวัด','url'=>array('create')),
//array('label'=>'แก้ไขจังหวัด','url'=>array('update','id'=>$model->id)),
//array('label'=>'จัดการรูปภาพ','url'=>array('images/admin','id'=>$model->id)),
array('label'=>'จัดการรูปภาพ','url'=>array('images/admin','id'=>$model->data_southnationpark_id)),
array('label'=>'ลบรูปภาพ','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')),
//array('label'=>'รายการอัลบั้มรูปภาพ','url'=>array('admin')),

);
?>

<h1>รายละเอียด</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'nationData.park_name',
array(
		'name'=>'name',
		'type'=>'html',
		'value'=>($model->name)?CHtml::image(
				Yii::app()->request->baseUrl.'/images/'
				.$model->name,'',
				array('width'=>200,'height'=>200)):CHtml::image(
						Yii::app()->request->baseUrl.'/images/noimage.jpg'
						,'',array('width'=>600,'height'=>350)),
		),  // show image on view
		
		'file',
),
)); ?>
