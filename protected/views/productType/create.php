<?php
$this->breadcrumbs=array(
	'Mproduct Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage ProductType','url'=>array('admin')),
);
?>

<h1>Create ProductType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>