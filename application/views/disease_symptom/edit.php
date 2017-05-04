<?php echo validation_errors(); ?>

<?php echo form_open('disease_symptom/edit/'.$disease_symptom['disease_symptom_code']); ?>

		<center><table class="main_exception"><tr><td>
	<div>Disease Symptom Name : <input type="text" name="disease_symptom_name" value="<?php echo ($this->input->post('disease_symptom_name') ? $this->input->post('disease_symptom_name') : $disease_symptom['disease_symptom_name']); ?>" /></div>
</td></tr><tr><td>
	<div>Disease Symptom Description : <textarea name="disease_symptom_description"><?php echo ($this->input->post('disease_symptom_description') ? $this->input->post('disease_symptom_description') : $disease_symptom['disease_symptom_description']); ?></textarea></div>
	</td></tr><tr><td>
	<button type="submit">Save</button>
</td></tr></table></center>
<?php echo form_close(); ?>
