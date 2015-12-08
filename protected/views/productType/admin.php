<?php
$this->breadcrumbs=array(
	'Product Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create ProductType','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mproduct-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Product Types</h1>

<!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mproduct-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		/*'created_date',
		'created_by',
		'status',*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
