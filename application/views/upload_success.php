<html>
<head>
<title>Upload Form</title>
</head>
<body>

  <?php print_r($_SESSION); ?>

<h3>Your file was successfully uploaded!</h3>
<?php echo '<img src="'.base_url().'uploads/'.$upload_data['file_name'].'" alt="'.$upload_data['file_name'].'" width="300px" height="auto">'; ?>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>)
