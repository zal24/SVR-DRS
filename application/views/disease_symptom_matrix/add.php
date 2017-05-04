<?php echo validation_errors(); ?>

<?php echo form_open('disease_symptom_matrix/add'); ?>

<center><table class="main_exception"><tr><td>
	<div>Disease Symptom Sequence : <input type="text" name="disease_symptom_sequence" value="<?php echo $this->input->post('disease_symptom_sequence'); ?>" /></div>
</td></tr><tr><td>
	<div>Disease Symptom Rank : <input type="text" name="disease_symptom_rank" value="<?php echo $this->input->post('disease_symptom_rank'); ?>" /></div>
</td></tr><tr><td>
	<div>Disease Frequency : <input type="text" name="disease_frequency" value="<?php echo $this->input->post('disease_frequency'); ?>" /></div>
	</td></tr><tr><td>
	<button type="submit">Save</button>
</td></tr></table></center>
<?php echo form_close(); ?>
