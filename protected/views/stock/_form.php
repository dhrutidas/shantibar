<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mstock-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'product_id',$products,array('class'=>'chzn-select-deselect','empty'=>'Select a Product')); ?>

	<?php echo $form->dropDownListRow($model,'quantity_karton',$kartons,array('class'=>'chzn-select-deselect','empty'=>'Select a karton')); ?>
	
	<?php echo $form->textFieldRow($model,'quantity_karton',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'litre_ml',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'money',array('class'=>'span5','maxlength'=>19)); ?>
	<?php echo $form->labelEx($model,'purchase_date'); ?>
		
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                'attribute'=>'purchase_date',
	                                'model'=>$model,
									'options' => array(
									'showAnim' => 'fold',
									
									),
									'htmlOptions'=>array(
											'class'=>'text2',
											'placeHolder'=>'Purchase date'
									
									),
	
			));?>

	<?php echo $form->textFieldRow($model,'bill_id',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
