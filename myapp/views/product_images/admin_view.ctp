<div class="productImages view">
<h2><?php  __('Product Image');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productImage['ProductImage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($productImage['Product']['id'], array('controller' => 'products', 'action' => 'view', $productImage['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productImage['ProductImage']['image_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productImage['ProductImage']['image_order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Image', true), array('action' => 'edit', $productImage['ProductImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product Image', true), array('action' => 'delete', $productImage['ProductImage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productImage['ProductImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Images', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Image', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
