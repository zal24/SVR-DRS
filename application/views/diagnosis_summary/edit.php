<?php echo validation_errors(); ?>

<?php echo form_open('diagnosis_summary/edit/'.$diagnosis_summary['diagnosis_reference_number']); ?>
<center><table class="main_exception"><tr><td>

	<div>Disease Date : <input type="text" name="disease_date" value="<?php echo ($this->input->post('disease_date') ? $this->input->post('disease_date') : $diagnosis_summary['disease_date']); ?>" /></div>
</td></tr><tr><td>

	<div>Diagnosis Patron Code : <input type="text" name="diagnosis_patron_code" value="<?php echo ($this->input->post('diagnosis_patron_code') ? $this->input->post('diagnosis_patron_code') : $diagnosis_summary['diagnosis_patron_code']); ?>" /></div>
</td></tr><tr><td>

	<div>Diagnosis Comment : <textarea name="diagnosis_comment"><?php echo ($this->input->post('diagnosis_comment') ? $this->input->post('diagnosis_comment') : $diagnosis_summary['diagnosis_comment']); ?></textarea></div>
</td></tr><tr><td>

	<div>Diagnosis Physician Code : <input type="text" name="diagnosis_physician_code" value="<?php echo ($this->input->post('diagnosis_physician_code') ? $this->input->post('diagnosis_physician_code') : $diagnosis_summary['diagnosis_physician_code']); ?>" /></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
