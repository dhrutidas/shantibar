<?php
$this->breadcrumbs=array(
	'Mlitre Kartons'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MLitreKarton','url'=>array('index')),
	array('label'=>'Create MLitreKarton','url'=>array('create')),
	array('label'=>'View MLitreKarton','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MLitreKarton','url'=>array('admin')),
);
?>

<h1>Update MLitreKarton <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>