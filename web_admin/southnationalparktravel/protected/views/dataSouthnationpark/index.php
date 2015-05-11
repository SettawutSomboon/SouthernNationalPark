<?php
$this->breadcrumbs=array(
	'Data Southnationparks',
);

$this->menu=array(
array('label'=>'Create DataSouthnationpark','url'=>array('create')),
array('label'=>'Manage DataSouthnationpark','url'=>array('admin')),
);
?>

<h1>Data Southnationparks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
