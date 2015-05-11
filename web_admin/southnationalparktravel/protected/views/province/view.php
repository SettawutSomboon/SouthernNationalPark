<?php


$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'จังหวัด'=>array('admin'),
		$model->province_name,
);


$this->menu=array(
//array('label'=>'List Province','url'=>array('index')),
array('label'=>'เพิ่มจังหวัด','url'=>array('create')),
array('label'=>'แก้ไขจังหวัด','url'=>array('update','id'=>$model->id)),
array('label'=>'ลบจังหวัด','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')),
array('label'=>'รายการจังหวัด','url'=>array('admin')),
);
?>

<h1>รายละเอียด</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'province_name',
		array(
		'name'=>'province_image',
		'type'=>'html',
		'value'=>($model->province_image)?CHtml::image(
				Yii::app()->request->baseUrl.'/provinceimage/'
				.$model->province_image,'',
				array('width'=>300,'height'=>200)):CHtml::image(
						Yii::app()->request->baseUrl.'/provinceimage/noimage.jpg'
						,'',array('width'=>100,'height'=>100)),
		), // show image on view
),
)); ?>
