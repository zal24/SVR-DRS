<?php echo validation_errors(); ?>

<?php echo form_open('visiting_patron/add'); ?>
<center><table class="main_exception"><tr><td>

	<div>Patron First Name : <input type="text" name="patron_first_name" value="<?php echo $this->input->post('patron_first_name'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Last Name : <input type="text" name="patron_last_name" value="<?php echo $this->input->post('patron_last_name'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Middle Initial : <input type="text" name="patron_middle_initial" value="<?php echo $this->input->post('patron_middle_initial'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Dob : <input type="text" name="patron_dob" value="<?php echo $this->input->post('patron_dob'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Place Of Birth : <input type="text" name="patron_place_of_birth" value="<?php echo $this->input->post('patron_place_of_birth'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Street Address : <input type="text" name="patron_street_address" value="<?php echo $this->input->post('patron_street_address'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron City : <input type="text" name="patron_city" value="<?php echo $this->input->post('patron_city'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Province State Code : <input type="text" name="patron_province_state_code" value="<?php echo $this->input->post('patron_province_state_code'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Telephone : <input type="text" name="patron_telephone" value="<?php echo $this->input->post('patron_telephone'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Email : <input type="text" name="patron_email" value="<?php echo $this->input->post('patron_email'); ?>" /></div>
</td></tr><tr><td>

	<div>Patron Primary Physician Code : <input type="text" name="patron_primary_physician_code" value="<?php echo $this->input->post('patron_primary_physician_code'); ?>" /></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
