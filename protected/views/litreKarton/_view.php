<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('litre')); ?>:</b>
	<?php echo CHtml::encode($data->litre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bottle_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->bottle_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_type')); ?>:</b>
	<?php echo CHtml::encode($data->product_type); ?>
	<br />


</div>