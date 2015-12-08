<?php
$this->breadcrumbs=array(
	'Mstocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MStock','url'=>array('index')),
	array('label'=>'Create MStock','url'=>array('create')),
	array('label'=>'View MStock','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MStock','url'=>array('admin')),
);
?>

<h1>Update MStock <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>