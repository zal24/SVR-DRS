<?php echo validation_errors(); ?>

<?php echo form_open('country/add'); ?>
<center><table class="main_exception"><tr><td>

	<div>Country Name : <input type="text" name="country_name" value="<?php echo $this->input->post('country_name'); ?>" /></div>
</td></tr><tr><td>

	<div>Country Abbreviation : <input type="text" name="country_abbreviation" value="<?php echo $this->input->post('country_abbreviation'); ?>" /></div>
</td></tr><tr><td>

	<button type="submit">Save</button>
</td></tr></table></center>

<?php echo form_close(); ?>
