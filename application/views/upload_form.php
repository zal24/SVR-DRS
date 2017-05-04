<html>
<head>
<title>Upload Form</title>
</head>
<body>
<div>
<?php echo $error;?>

<?php echo form_open_multipart('upload/upload_profile_pic/'.$_SESSION['User_ID'],array('id' => 'imageUploadForm'));?>
<center><table class="main_exception"><tr><td>
<input class="form-control" type="file" name="userfile" id= "ImageBrowse" size="20" />
</td></tr><tr><td>

<input class="btn btn-primary" type="submit" value="Upload" />
</td></tr></table></center>
</form>
</div>
