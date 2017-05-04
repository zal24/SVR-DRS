<?php echo validation_errors(); ?>

<?php echo form_open('general_prescription/edit/'.$general_prescription['prescription_code']); ?>
<center><table class="main_exception"><tr><td>
	<div>Disease Code : <input type="text" name="disease_code" value="<?php echo ($this->input->post('disease_code') ? $this->input->post('disease_code') : $general_prescription['disease_code']); ?>" /></div>
</td></tr><tr><td>
	<div>Prescription Name : <input type="text" name="prescription_name" value="<?php echo ($this->input->post('prescription_name') ? $this->input->post('prescription_name') : $general_prescription['prescription_name']); ?>" /></div>
</td></tr><tr><td>
	<div>Prescription Comment : <textarea name="prescription_comment"><?php echo ($this->input->post('prescription_comment') ? $this->input->post('prescription_comment') : $general_prescription['prescription_comment']); ?></textarea></div>
	</td></tr><tr><td>
	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
