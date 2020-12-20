<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['SubCategory']['category_id'], array('controller' => 'sub_categories', 'action' => 'view', $product['SubCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['product_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['product_desc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['price']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product', true), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories', true), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category', true), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Images', true), array('controller' => 'product_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Image', true), array('controller' => 'product_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Product Images');?></h3>
	<?php if (!empty($product['ProductImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Image Name'); ?></th>
		<th><?php __('Image Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductImage'] as $productImage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productImage['id'];?></td>
			<td><?php echo $productImage['product_id'];?></td>
			<td><?php echo $productImage['image_name'];?></td>
			<td><?php echo $productImage['image_order'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'product_images', 'action' => 'view', $productImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'product_images', 'action' => 'edit', $productImage['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'product_images', 'action' => 'delete', $productImage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Image', true), array('controller' => 'product_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
