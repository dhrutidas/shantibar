<?php
$this->breadcrumbs=array(
	'Mcompanies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MCompany','url'=>array('index')),
	array('label'=>'Create MCompany','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mcompany-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mcompanies</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mcompany-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'sort_name',
		array(
				'name'=>'image_id',
				'value'=>'CHtml::image(yii::app()->baseUrl."/".$data->image->path,"",array("style"=>"width:140px;height:115px;"))',
				'type'=>'html',
				
		),
		'created_by',
		'created',
		/*
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
