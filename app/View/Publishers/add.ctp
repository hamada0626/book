<div class="publishers form">
<?php echo $this->Form->create('Publisher'); ?>
	<fieldset>
		<legend><?php echo __('Add Publisher'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('used');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Publishers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('controller' => 'libraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
	</ul>
</div>
