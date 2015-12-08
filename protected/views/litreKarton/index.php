<?php
$this->breadcrumbs=array(
	'Mlitre Kartons',
);

$this->menu=array(
	array('label'=>'Create MLitreKarton','url'=>array('create')),
	array('label'=>'Manage MLitreKarton','url'=>array('admin')),
);
?>

<h1>Mlitre Kartons</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
