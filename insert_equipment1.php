<?php
	
	
	 if (isset($_POST['submit'])) {
	 	$name = $_POST['name'];
	 	$brand = $_POST['brand'];
	 	$price = $_POST['price'];
	 	$grade = $_POST['grade'];
	 	$size = $_POST['size'];
	 	$amout1 = $_POST['amout1'];
	 	$comment = $_POST['comment'];
	 	$date_save = date("Y-m-d");

	 	require ('Database.php');

	 	$sql = "INSERT INTO insert_equipment (name,brand,price,grade,size,amout1,comment,date_save) VALUES ('$name','$brand','$price','$grade','$size','$amout1','$comment','$date_save')";

	 $conn->query($sql);


	if ($conn) { 
	
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย');window.location='insert_equipment.php'</script>";
	

		# code...
	}else{
		
	echo "<script>alert('เกิดข้อผิดพลาด');window.location='insert_equipment.php';</script>";
	}

	$conn->close();
	
}
 ?>