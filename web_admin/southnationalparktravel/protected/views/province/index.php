<?php
$this->breadcrumbs=array(
	'Provinces',
);

$this->menu=array(
array('label'=>'Create Province','url'=>array('create')),
array('label'=>'Manage Province','url'=>array('admin')),
);
?>

<h1>Provinces</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
