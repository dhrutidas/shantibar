<?php
$this->breadcrumbs=array(
	'Mlitre Kartons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MLitreKarton','url'=>array('index')),
	array('label'=>'Manage MLitreKarton','url'=>array('admin')),
);
?>

<h1>Create MLitreKarton</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>