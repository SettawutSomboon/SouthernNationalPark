<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'อุทยานแห่งชาติ'=>array('admin'),
		$model->park_name,
		'แก้ไข',
);


	$this->menu=array(
	//array('label'=>'List DataSouthnationpark','url'=>array('index')),
	array('label'=>'เพิ่มอุทยานแห่งชาติ','url'=>array('create')),
	array('label'=>'ดูอุทยานแห่งชาติ','url'=>array('view','id'=>$model->id)),
	array('label'=>'รายการอุทยานแห่งชาติ','url'=>array('admin')),
	);
	?>

	<h1>แก้ไขข้อมูลอุทยานแห่งชาติ</h1>

<?php  echo $this->renderPartial('_form_update',array('model'=>$model	)); ?>
<?php //echo $this->renderPartial('_form',array('model'=>$model	)); ?>