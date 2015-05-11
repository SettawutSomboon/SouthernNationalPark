<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'ประเภทอุทยาน'=>array('admin'),
		$model->category_name,
);


$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
array('label'=>'เพิ่มประเภทอุทยานแห่งชาติ','url'=>array('create')),
array('label'=>'แก้ไขประเภทอุทยานแห่งชาติ','url'=>array('update','id'=>$model->id)),
array('label'=>'ลบประเภทอุทยานแห่งชาติ','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')),
array('label'=>'ประเภทอุทยานแห่งชาติ','url'=>array('admin')),
);
?>

<h1>รายละเอียด</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'category_name',
),
)); ?>
