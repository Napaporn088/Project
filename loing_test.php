<?php
	session_start();
	require 'Database.php';

	$in_id = mysqli_real_escape_string($conn,$_POST['Username']);
	$in_pass = mysqli_real_escape_string($conn,$_POST['Password']);


	$sql = "SELECT * FROM login_test where code='$in_id' and pass = '$in_pass'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

	
	if(!$result){
		?>
		<?php  
		echo "<script>alert('กรุณาตรวจสอบ Username หรือ Password!'); window.location='login.php';</script>";
			exit();?>
		<?php
	}else{ 
		$_SESSION['code'] = $result['code'];
		$_SESSION['pass'] = $result['pass'];
		$_SESSION['name'] = $result['name'];
		$_SESSION['major'] = $result['major'];
		$_SESSION['telephone_num'] = $result['telephone_num'];
		$_SESSION['tepy'] = $result['tepy'];
		$_SESSION['position'] = $result['position'];	
	}

        $_SESSION['page_chem'] = 1;
        $_SESSION['txt_key'] = "";
        $_SESSION['key'] ="";

	if ($_SESSION['position'] == "1") {
		?>
			<script type="text/javascript">
				window.location.href='teacher/index_teacher.php';
			</script>
		<?php
		# code...
	}else if($_SESSION['position'] == "2"){
		?>
			<script type="text/javascript">
				window.location.href='authorities/index_authorities.php';
			</script>
		<?php
	}else if ($_SESSION['position'] == "3") {
		?>

		
			<script type="text/javascript">
				window.location.href='user/index.php';
			</script>
		<?php
	}else if ($_SESSION['position'] == "4") {
		?>
			<script type="text/javascript">
				window.location.href='user/index.php';
			</script>
		<?php
	}
	/*if ($_SESSION['status_user'] == "อาจารย์") {
		?>
			<script type="text/javascript">
				window.location.href='index.php';
			</script>
		<?php
		# code...
	}else if($_SESSION['status_user'] == "เจ้าหน้าที่"){
		?>
			<script type="text/javascript">
				window.location.href=' ';
			</script>
		<?php
	}else if ($_SESSION['status_user'] == "นิสิตปริญาตรี") {
		?>
			<script type="text/javascript">
				window.location.href='index.php';
			</script>
		<?php
	}else if ($_SESSION['status_user'] == "แอดมิน") {
		?>
			<script type="text/javascript">
				window.location.href='index.php';
			</script>
		<?php
	}*/

		session_write_close();
?>
 