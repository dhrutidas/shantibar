<?php
$this->breadcrumbs=array(
	'Mproduct Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MProductType','url'=>array('index')),
	array('label'=>'Create MProductType','url'=>array('create')),
	array('label'=>'Update MProductType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MProductType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MProductType','url'=>array('admin')),
);
?>

<h1>View MProductType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'created_date',
		'created_by',
		'status',
	),
)); ?>
