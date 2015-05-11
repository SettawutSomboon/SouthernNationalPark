<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'จังหวัด'=>array('admin'),
		$model->province_name,
		'แก้ไข',
);


	$this->menu=array(
	//array('label'=>'List Province','url'=>array('index')),
	array('label'=>'เพิ่มจังหวัด','url'=>array('create')),
	array('label'=>'ดูจังหวัด','url'=>array('view','id'=>$model->id)),
	array('label'=>'รายการจังหวัด','url'=>array('admin')),
	);
	?>

	<h1>แก้ไขจังหวัด </h1>

<?php echo $this->renderPartial('_form_update',array('model'=>$model)); ?>