<div class="libraries form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset>
		<legend><?php echo __('Add Review'); ?></legend>
	<?php
		echo $this->Form->input('review');
		echo $this->Form->hidden('library_id',array('value'=>$library));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>