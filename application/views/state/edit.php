<?php echo validation_errors(); ?>

<?php echo form_open('state/edit/'.$state['province_state_code']); ?>

<center><table class="main_exception"><tr><td>
	Province State Name : <input type="text" name="province_state_name" value="<?php echo ($this->input->post('province_state_name') ? $this->input->post('province_state_name') : $state['province_state_name']); ?>"
	</td></tr><tr><td>
	Province State Country Code : <input type="text" name="province_state_country_code" value="<?php echo ($this->input->post('province_state_country_code') ? $this->input->post('province_state_country_code') : $state['province_state_country_code']); ?>"
	</td></tr><tr><td>
	<button type="submit">Save</button>
</td></tr></table></center>
<?php echo form_close(); ?>
