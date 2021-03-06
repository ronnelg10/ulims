<?php
/* @var $this CollectionController */
/* @var $data Collection */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::encode($data->request_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receipt_id')); ?>:</b>
	<?php echo CHtml::encode($data->receipt_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nature')); ?>:</b>
	<?php echo CHtml::encode($data->nature); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receiptid')); ?>:</b>
	<?php echo CHtml::encode($data->receiptid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancelled')); ?>:</b>
	<?php echo CHtml::encode($data->cancelled); ?>
	<br />


</div>