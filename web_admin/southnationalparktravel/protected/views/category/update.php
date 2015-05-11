<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'ประเภทอุทยานแห่งชาติ'=>array('admin'),
		$model->category_name,
		'แก้ไข',
);


	$this->menu=array(
	//array('label'=>'List DataSouthnationpark','url'=>array('index')),
	array('label'=>'เพิ่มประเภทอุทยานแห่งชาติ','url'=>array('create')),
	array('label'=>'ดูประเภทอุทยานแห่งชาติ','url'=>array('view','id'=>$model->id)),
	array('label'=>'ประเภทอุทยานแห่งชาติ','url'=>array('admin')),
	);
	?>

	<h1>แก้ไขประเภทอุทยานแห่งชาติ</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>