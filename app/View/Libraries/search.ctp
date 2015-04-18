<div class="libraries search">
	<h2><?php echo __('検索'); ?></h2>
	<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('検索'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('category');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
