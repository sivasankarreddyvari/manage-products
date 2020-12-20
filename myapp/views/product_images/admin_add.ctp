<div class="productImages form">
<?php echo $this->Form->create('ProductImage');?>
	<fieldset>
 		<legend><?php __('Admin Add Product Image'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('file','image_name');
		echo $this->Form->input('image_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>