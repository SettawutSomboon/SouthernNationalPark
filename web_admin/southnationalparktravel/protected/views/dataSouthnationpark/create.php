<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'อุทยานแห่งชาติ'=>array('admin'),
		'เพิ่มอุทยานแห่งชาติ',
);


$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
array('label'=>'รายการอุทยานแห่งชาติ','url'=>array('admin')),
);
?>

<h1>เพิ่มอุทยานแห่งชาติ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>