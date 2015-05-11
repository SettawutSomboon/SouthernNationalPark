<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'จังหวัด'=>array('admin'),
		'เพิ่มจังหวัด',
);


$this->menu=array(
//array('label'=>'List Province','url'=>array('index')),
array('label'=>'รายการจังหวัด','url'=>array('admin')),
);
?>

<h1>เพิ่มจังหวัด</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>