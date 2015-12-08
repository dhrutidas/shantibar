<?php
$this->breadcrumbs=array(
	'Mcompanies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MCompany','url'=>array('index')),
	array('label'=>'Create MCompany','url'=>array('create')),
	array('label'=>'Update MCompany','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MCompany','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCompany','url'=>array('admin')),
);
?>

<h1>View MCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'sort_name',
		'image',
		'created_by',
		'created',
		'status',
	),
)); ?>
