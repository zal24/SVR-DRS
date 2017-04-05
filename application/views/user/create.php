  <center>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>
<table>
  <tr>
    <td>
      <label for="username">Username:</label>
    </td><td>
      <input type="input" name="username" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="email">Email:</label>
    </td><td>
      <input type="email" name="email" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="password" style="padding-right: 4px;">Password:</label>
    </td><td>
      <input type="password" name="password" value="">
    </td>
  </tr>
</table>
<input type="submit" name="submit" value="Create User" />

</form>
</center>
