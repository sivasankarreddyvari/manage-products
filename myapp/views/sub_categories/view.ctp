<div class="subCategories view">
<h2><?php  __('Sub Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subCategory['SubCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subCategory['Category']['id'], array('controller' => 'categories', 'action' => 'view', $subCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Category Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subCategory['SubCategory']['sub_category_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Image Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subCategory['SubCategory']['sub_image_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Category', true), array('action' => 'edit', $subCategory['SubCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sub Category', true), array('action' => 'delete', $subCategory['SubCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subCategory['SubCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Products');?></h3>
	<?php if (!empty($subCategory['Product'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Category Id'); ?></th>
		<th><?php __('Sub Category Id'); ?></th>
		<th><?php __('Product Name'); ?></th>
		<th><?php __('Product Desc'); ?></th>
		<th><?php __('Price'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subCategory['Product'] as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['id'];?></td>
			<td><?php echo $product['category_id'];?></td>
			<td><?php echo $product['sub_category_id'];?></td>
			<td><?php echo $product['product_name'];?></td>
			<td><?php echo $product['product_desc'];?></td>
			<td><?php echo $product['price'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'products', 'action' => 'delete', $product['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
