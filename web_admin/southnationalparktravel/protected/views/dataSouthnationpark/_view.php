<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('park_name')); ?>:</b>
	<?php echo CHtml::encode($data->park_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('general')); ?>:</b>
	<?php echo CHtml::encode($data->general); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topography')); ?>:</b>
	<?php echo CHtml::encode($data->topography); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('climate')); ?>:</b>
	<?php echo CHtml::encode($data->climate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plant')); ?>:</b>
	<?php echo CHtml::encode($data->plant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('animal')); ?>:</b>
	<?php echo CHtml::encode($data->animal); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longtitude')); ?>:</b>
	<?php echo CHtml::encode($data->longtitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_id')); ?>:</b>
	<?php echo CHtml::encode($data->province_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

</div>