<?php
$this->breadcrumbs=array(
	'Mstocks',
);

$this->menu=array(
	array('label'=>'Create MStock','url'=>array('create')),
	array('label'=>'Manage MStock','url'=>array('admin')),
);
?>

<h1>Mstocks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
