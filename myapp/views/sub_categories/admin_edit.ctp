<div class="subCategories form">
<?php echo $this->Form->create('SubCategory');?>
	<fieldset>
 		<legend><?php __('Admin Edit Sub Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('sub_category_name');
		echo $this->Form->input('sub_image_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SubCategory.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SubCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>