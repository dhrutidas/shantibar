<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_karton')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_karton); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('litre_ml')); ?>:</b>
	<?php echo CHtml::encode($data->litre_ml); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('money')); ?>:</b>
	<?php echo CHtml::encode($data->money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_date')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_id')); ?>:</b>
	<?php echo CHtml::encode($data->bill_id); ?>
	<br />

	*/ ?>

</div>