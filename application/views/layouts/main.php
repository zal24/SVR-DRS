<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
	</head>

	<body>
	<?php
		if(isset($_view) && $_view){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
	    $this->load->view($_view);
		$this->load->view('templates/footer');
		}?>
	</body>
</html>
