<?php
$this->breadcrumbs=array(
	'Mproducts',
);

$this->menu=array(
	array('label'=>'Create MProduct','url'=>array('create')),
	array('label'=>'Manage MProduct','url'=>array('admin')),
);
?>

<h1>Mproducts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
