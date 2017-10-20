<?php

	require "../Database.php";
	if (isset($_POST["sql"])) {
		$output ='';
		$sql = "SELECT * FROM equipment WHERE name LIKE '%".$_POST["sql"]."%'";
		$query = mysqli_query($conn,$sql);
		$output = '<ul class="list-unstyled">';

		if (mysqli_num_row($query) >0) {
			while ($row = mysqli_fetch_array($query)) {
				$output .='<li>'.$row["name_equipment"].'</li>'
			}
		}else{
			$output .='<li>equipment not found</li>';
		}
		$output .='</ul>';
		echo $output;
	}


?>