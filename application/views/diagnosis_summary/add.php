<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_summary/add'); ?>


<center><table class="main_exception"><tr><td>

	<div>Disease Date : <input type="text" name="disease_date" value="<?php echo $this->input->post('disease_date'); ?>" /></div>
</td></tr><tr><td>

	<div>Diagnosis Patron Code : <input type="text" name="diagnosis_patron_code" value="<?php echo $this->input->post('diagnosis_patron_code'); ?>" /></div>
</td></tr><tr><td>

	<div>Diagnosis Comment : <textarea name="diagnosis_comment"><?php echo $this->input->post('diagnosis_comment'); ?></textarea></div>
</td></tr><tr><td>

	<div>Diagnosis Physician Code : <input type="text" name="diagnosis_physician_code" value="<?php echo $this->input->post('diagnosis_physician_code'); ?>" /></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
