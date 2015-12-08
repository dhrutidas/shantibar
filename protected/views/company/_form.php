<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mcompany-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sort_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->fileFieldRow($model,'image_id'); ?>

	<?php //echo $form->textFieldRow($model,'created_by',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'created',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->radioButtonListRow($model,'status',array('1'=>'Active','0'=>'InActive')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
