<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
 		<legend><?php __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('category_name');
		echo $this->Form->input('category_image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>