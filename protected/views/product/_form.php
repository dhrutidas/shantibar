<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mproduct-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'company_id',$brands,array('class'=>'chzn-select-deselect','empty'=>'Select a Brand','title'=>'Select a Brand')); ?>
	
	<?php echo $form->dropDownListRow($model,'type_id',$productTypes,array('class'=>'chzn-select-deselect','empty'=>'Select a Type','title'=>'Select a type')); ?>
	
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sort_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->radioButtonListRow($model,'status',array('1'=>'Active','0'=>'InActive')); ?>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
