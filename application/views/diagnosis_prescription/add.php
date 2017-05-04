<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_prescription/add'); ?>


<center><table class="main_exception"><tr><td>

	<div>Prescription Instructions : <textarea name="prescription_instructions"><?php echo $this->input->post('prescription_instructions'); ?></textarea></div>
</td></tr><tr><td>

	<div>Prescription Comment : <textarea name="prescription_comment"><?php echo $this->input->post('prescription_comment'); ?></textarea></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
