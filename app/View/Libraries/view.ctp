<div class="libraries view">
<h2><?php echo __('Library'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($library['Library']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book No'); ?></dt>
		<dd>
			<?php echo h($library['Library']['book_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($library['Library']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($library['Category']['name'], array('controller' => 'categories', 'action' => 'view', $library['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($library['Library']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($library['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $library['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Used'); ?></dt>
		<dd>
			<?php echo h($library['Library']['used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($library['Library']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($library['Library']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php  echo __('レビュー');?></dt>
		<dd>
		<ul>
			<?php foreach ($library['Review'] as $review): ?>
			<li><?php echo h($review['review']);?></li>
			<?php endforeach; ?>
		</ul>
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Library'), array('action' => 'edit', $library['Library']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Library'), array('action' => 'delete', $library['Library']['id']), array(), __('Are you sure you want to delete # %s?', $library['Library']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
	</ul>
</div>
