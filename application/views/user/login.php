<?php  if(isset($_SESSION['Username'])) {
    redirect(site_url('user/view'));}?>
<center>
<h2>Login</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('user/login'); ?>
<table><tr><td>
<label for="username">Username:</label></td><td>
<input type="input" name="username" />
</td></tr><tr><td>
<label for="password" >Password:</label></td><td>
<input type="password" name="password" value=""></td></tr>
</table>
<input type="submit" name="submit" value="Login" />
</center>
</form>
