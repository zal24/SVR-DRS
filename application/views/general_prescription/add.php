<?php echo validation_errors(); ?>

<?php echo form_open('general_prescription/add'); ?>
<center><table class="main_exception"><tr><td>
	<div>Disease Code : <input type="text" name="disease_code" value="<?php echo $this->input->post('disease_code'); ?>" /></div>
</td></tr><tr><td>
	<div>Prescription Name : <input type="text" name="prescription_name" value="<?php echo $this->input->post('prescription_name'); ?>" /></div>
</td></tr><tr><td>
	<div>Prescription Comment : <textarea name="prescription_comment"><?php echo $this->input->post('prescription_comment'); ?></textarea></div>
	</td></tr><tr><td>
	<button type="submit">Save</button>
</td></tr></table></center>
<?php echo form_close(); ?>
