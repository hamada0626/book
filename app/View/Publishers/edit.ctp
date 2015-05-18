<div class="publishers form">
<?php echo $this->Form->create('Publisher'); ?>
	<fieldset>
		<legend><?php echo __('Edit Publisher'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('used');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Publisher.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Publisher.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('controller' => 'libraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
	</ul>
</div>
