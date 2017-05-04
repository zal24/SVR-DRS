<?php echo validation_errors(); ?>

<?php echo form_open('state/add'); ?>
<center><table class="main_exception"><tr><td>
	<div>Province State Name : <input type="text" name="province_state_name" value="<?php echo $this->input->post('province_state_name'); ?>" /></div>
	</td></tr><tr><td>
	<div>Province State Country Code : <input type="text" name="province_state_country_code" value="<?php echo $this->input->post('province_state_country_code'); ?>" /></div>
	</td></tr><tr><td>

	<button type="submit">Save</button>
	</td></tr></table></center>

<?php echo form_close(); ?>
