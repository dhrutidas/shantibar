<?php
$this->breadcrumbs=array(
	'Mstocks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MStock','url'=>array('index')),
	array('label'=>'Create MStock','url'=>array('create')),
	array('label'=>'Update MStock','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MStock','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MStock','url'=>array('admin')),
);
?>

<h1>View MStock #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'quantity_karton',
		'litre_ml',
		'money',
		'created_by',
		'created_date',
		'purchase_date',
		'bill_id',
	),
)); ?>
