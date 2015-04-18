<div class="libraries form">
<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('Edit Library'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('book_no');
		echo $this->Form->input('title');
		echo $this->Form->input('category_id');
		echo $this->Form->input('author');
		echo $this->Form->input('publisher_id');
		echo $this->Form->input('used');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Library.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Library.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
	</ul>
</div>
