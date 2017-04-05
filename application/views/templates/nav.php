<div class="navwrapper">
<ul class="navigation">
  <li><a href="<?php echo site_url('main'); ?>" title="Home">Home</a></li>
  <?PHP if(isset($_SESSION['Username'])){ ?>
   <li><a href="<?php echo site_url('user/view'); ?>">Account</a>
    <ul>
      <li><a href="<?php echo site_url('user/view'); ?>">Profile</a></li>
      <li><a href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
    </ul>
  </li>
  <?PHP if($_SESSION['PermissionSet']>=1){ ?>
  <li><a href="<?php echo site_url('#'); ?>" title="Veiw">Veiw</a>
    <ul>
      <li><a href="<?php echo site_url('country'); ?>">Countries</a></li>
      <li><a href="<?php echo site_url('disease_definition'); ?>">Disease Definitions</a></li>
    </ul>
  </li>
   <?PHP if($_SESSION['PermissionSet']>=2){ ?>
    <li><a href="#">People</a>
      <ul>
        <li><a href="<?php echo site_url('user/create'); ?>">Create User</a></li>
      </ul>
    </li>
  <?PHP }}} else{ ?>
    <li><a href="<?php echo site_url('user/login'); ?>">Login</a></li>
  <?PHP } ?>
  <div class="clear"></div>
</ul>
</div>