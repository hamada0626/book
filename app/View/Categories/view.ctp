<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Used'); ?></dt>
		<dd>
			<?php echo h($category['Category']['used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('controller' => 'libraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Libraries'); ?></h3>
	<?php if (!empty($category['Library'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book No'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Publisher Id'); ?></th>
		<th><?php echo __('Used'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Library'] as $library): ?>
		<tr>
			<td><?php echo $library['id']; ?></td>
			<td><?php echo $library['book_no']; ?></td>
			<td><?php echo $library['title']; ?></td>
			<td><?php echo $library['category_id']; ?></td>
			<td><?php echo $library['author']; ?></td>
			<td><?php echo $library['publisher_id']; ?></td>
			<td><?php echo $library['used']; ?></td>
			<td><?php echo $library['created']; ?></td>
			<td><?php echo $library['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'libraries', 'action' => 'view', $library['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'libraries', 'action' => 'edit', $library['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'libraries', 'action' => 'delete', $library['id']), array(), __('Are you sure you want to delete # %s?', $library['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
