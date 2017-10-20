<?php 
	$conn = mysqli_connect('localhost','root','','project');
	if(mysqli_connect_errno()){
		echo "not connect",mysqli_connect_error();
	}
	mysqli_set_charset($conn,'utf8');
 ?>
