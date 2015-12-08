<?php
$this->breadcrumbs=array(
	'Mstocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MStock','url'=>array('index')),
	array('label'=>'Manage MStock','url'=>array('admin')),
);
?>

<h1>Create MStock</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'products'=>$products,'kartons'=>$kartons)); ?>