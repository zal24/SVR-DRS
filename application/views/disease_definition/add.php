<?php echo validation_errors(); ?>

<?php echo form_open('disease_definition/add'); ?>
<center><table class="main_exception"><tr><td>

	<div>Disease Name : <input type="text" name="disease_name" value="<?php echo $this->input->post('disease_name'); ?>" /></div
	</td></tr><tr><td>

	<div>Disease Description : <textarea name="disease_description"><?php echo $this->input->post('disease_description'); ?></textarea></div>
</td></tr><tr><td>

	<div>Disease Category Code : <input type="text" name="disease_category_code" value="<?php echo $this->input->post('disease_category_code'); ?>" /></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>
<?php echo form_close(); ?>
