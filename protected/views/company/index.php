<?php
$this->breadcrumbs=array(
	'Mcompanies',
);

$this->menu=array(
	array('label'=>'Create MCompany','url'=>array('create')),
	array('label'=>'Manage MCompany','url'=>array('admin')),
);
?>

<h1>Mcompanies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
