<div class="products index">
	<h2><?php __('Products');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('sub_category_id');?></th>
			<th><?php echo $this->Paginator->sort('product_name');?></th>
			<th><?php echo $this->Paginator->sort('product_desc');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['SubCategory']['category_id'], array('controller' => 'sub_categories', 'action' => 'view', $product['SubCategory']['id'])); ?>
		</td>
		<td><?php echo $product['Product']['product_name']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['product_desc']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['price']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories', true), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category', true), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Images', true), array('controller' => 'product_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Image', true), array('controller' => 'product_images', 'action' => 'add')); ?> </li>
	</ul>
</div>