<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'ประเภทอุทยานแห่งชาติ'=>array('admin'),
		'เพิ่มประเภทอุทยานแห่งชาติ',
);


$this->menu=array(
//array('label'=>'List DataSouthnationpark','url'=>array('index')),
array('label'=>'ประเภทอุทยานแห่งชาติ','url'=>array('admin')),
);
?>

<h1>เพิ่มประเภทอุทยานแห่งชาติ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>