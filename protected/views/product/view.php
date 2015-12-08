<?php
$this->breadcrumbs=array(
	'Mproducts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MProduct','url'=>array('index')),
	array('label'=>'Create MProduct','url'=>array('create')),
	array('label'=>'Update MProduct','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MProduct','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MProduct','url'=>array('admin')),
);
?>

<h1>View MProduct #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		'name',
		'sort_name',
		'type_id',
		'created_by',
		'created_date',
		'status',
	),
)); ?>
