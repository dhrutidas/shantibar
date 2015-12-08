<?php
$this->breadcrumbs=array(
	'Mlitre Kartons'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MLitreKarton','url'=>array('index')),
	array('label'=>'Create MLitreKarton','url'=>array('create')),
	array('label'=>'Update MLitreKarton','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MLitreKarton','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MLitreKarton','url'=>array('admin')),
);
?>

<h1>View MLitreKarton #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'litre',
		'bottle_quantity',
		'product_type',
	),
)); ?>
