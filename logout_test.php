<?php
	session_start();
	session_destroy(); //ยกเลิกลบค่า Delete Session ทั้งหมด
	echo "<script>alert('คุณได้ออกจากระบบเรียบร้อยแล้ว');window.location='login.php';</script>";
	exit();

?>