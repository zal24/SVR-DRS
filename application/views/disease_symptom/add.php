<?php echo validation_errors(); ?>

<?php echo form_open('disease_symptom/add'); ?>
<center><table class="main_exception"><tr><td>

	<div>Disease Symptom Name : <input type="text" name="disease_symptom_name" value="<?php echo $this->input->post('disease_symptom_name'); ?>" /></div>
</td></tr><tr><td>

	<div>Disease Symptom Description : <textarea name="disease_symptom_description"><?php echo $this->input->post('disease_symptom_description'); ?></textarea></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
