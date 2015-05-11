<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_name')); ?>:</b>
	<?php echo CHtml::encode($data->province_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_image')); ?>:</b>
	<?php echo CHtml::encode($data->province_image); ?>
	<br />


</div>