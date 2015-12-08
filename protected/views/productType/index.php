<?php
$this->breadcrumbs=array(
	'Mproduct Types',
);

$this->menu=array(
	array('label'=>'Create MProductType','url'=>array('create')),
	array('label'=>'Manage MProductType','url'=>array('admin')),
);
?>

<h1>Mproduct Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
