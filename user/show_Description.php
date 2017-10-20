	<!DOCTYPE html>
<html>
<head>
	<title>ตรวจสอบสถานะ</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>ระบบจองสารเคมี วัสดุและเครื่องแก้ว</title>

    <link href="../css/bootstrap.minn.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="../jquery-ui.css">
    <script src="../external/jquery/jquery.js"></script>
    <script src="../jquery-ui.js"></script>

     <style type="text/css">
    
    .table_check th{
      color: #222;
      padding: 10px 8px;
      background: #B4F9D1;
      border-collapse: collapse;
      border-bottom: 2px solid #ccc;
      border: 1px solid #B0B0B0;
      text-align:left;

    }
    .table_check td{
      border-bottom: 1px solid #ccc;
      color: #666;
      background: #fff;
      padding: 10px;
      border: 1px solid #B0B0B0;
      text-align: left;
    }
    .table_check tbody tr:hover td{
      color: #111;
      background: #eee;
      border: 1px solid #B0B0B0;
      text-align: left;
    }
  </style>
</head>
<body>
	<div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
                <a class="navbar-brand" href="index.php">ระบบจองสารเคมี/วัสดุ/เครื่องแก้ว</a>
            </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home " aria-hidden="true"> หน้าแรก </span></a></li>

        <li><a href="show_chemical.php?page=1">รายชื่อสารเคมี</a></li>

        <li><a href="show_equipment.php?page=1">รายชื่อวัสดุและเครื่องแก้ว</a></li>

        <li class="dropdown"><a data-toggle="dropdown">คำร้อง <span class="caret"></span> </a>

            <ul class="dropdown-menu" >
              <li><a href="check_status.php"><center>ตรวจสอบสถานะ</center></a></li>
            </ul>
        </li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><?php
              session_start();
              echo $_SESSION['name'];
            
            ?></a></li>

        <li><a href="../logout_test.php" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"> ออกจากระบบ</span></a></li>
        
      </ul>
      </div>
      </div>
      </div>
      </nav>
        </div><br><br>	
	

        <center>
		<table style="width: 75%" border="1">
			        <tr> 
			          <th rowspan="2" width="3%"><center> ลำดับ </center></th>
			          <th rowspan="2" width="20%"><center> รายการที่ต้องการเบิก/ยืม</center></th>
			          <th rowspan="2" width="5%"><center> สูตรเคมี </center></th>
			          <th rowspan="2" width="5%"><center> ยี่ห้อ </center></th>
			          <th rowspan="2" width="5%"><center> เกรด </center></th>
			          <th rowspan="2" width="5%"><center> ขนาด </center></th>
			          <th rowspan="2" width="5%"><center>ราคาต่อหน่วย </center> </th>
			          <th colspan="2" width="17%"><center> จำนวน/ปริมาณที่ต้องใช้ (ระบุหน่วย) </center></th>
			          <th rowspan="2" align="right" width="5%"><center>ราคารวม </center> </th>
			          <th rowspan="2" align="right" width="8%"><center>หมายเหตุ </center> </th>
			         </tr>
			         <tr>
			            <td><center>เบิก</center></td>
			            <td><center>ยืม</center></td>
			         </tr>


		
<?php
		
 		function fetch_table(){
 			 include "../Database.php";
 			 $sql_fetch_borrow = "SELECT * FROM  borrow";
 			 $query = mysqli_query($conn,$sql_fetch_borrow);
 			 echo "ตาราง borrow<br>";
 			 $i=0;
 			 $page= $_GET['page'];
 			 echo "$page";
 			 echo $_SESSION['date_save'.$i];
 			 while ($result = mysqli_fetch_array($query)) {
 			 	if (($_SESSION['code'] ==$result['id_user']) && ($_SESSION['date_save'.$page]==$result['date_save'])) {
 			 	$id_user[$i] = $result['id_user'];
 			 	$id_equipment[$i] = $result['id_equipment'];
 			 	$amout[$i] = $result['amout'];
 			 	$borrow_date[$i] = $result['borrow_date'];
 			 	$return_day[$i] = $result['return_day'];
 			 	$date_save[$i] = $result['date_save'];
 			 	$sdentist[$i] = $result['sdentist'];
 			 	$Status[$i] = $result['Status'];
 			 	$i++;
 			 }
			}
			?>
			<form action="print_out.php"  >
			<?php  
			$No = 1;
			for ($j=0; $j < $i; $j++) { 
				echo "<tr >";
					echo "<td>".$No."</td>";
				if ($Status[$j] == "restore") {
					$sql_fetch_equ = "SELECT * FROM equipment";
					$query_equ = mysqli_query($conn,$sql_fetch_equ);
					$count=1;
					while ($result = mysqli_fetch_array($query_equ)) {
						if (trim($id_equipment[$j])==trim($result[0])) {
								
								echo "<td><input style='border: none'  type='text' name='list[]' id='list'  size='35' value='$result[1]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='chem[]' id='chem'  size='10' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='bran[]' id='bran'  size='10' value='$result[3]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='grande[]' id='grande'  size='10' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='size[]' id='size'  size='8' value='$result[4]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='price[]' id='price'  size='8' value='$result[5]' readonly></td>"
								;
								echo "<td><input style='border: none'  type='text' name='amount1[]' id='amount1'  size='8' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='amount2[]' id='amount2'  size='8' value='$amout[$j]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='sum[]' id='sum'  size='8' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='comment[]' id='comment'  size='15' value='$Status[$j]' readonly></td>";
							
								$count++;
								$No++;
						}

					}

				}
				if ($Status[$j] == "nonerestore") {
					$sql_fetch_equ_scr = "SELECT * FROM equipment_scrounge";
					$query_equ_scr = mysqli_query($conn,$sql_fetch_equ_scr);
					$count=1;
					while ($result = mysqli_fetch_array($query_equ_scr)) {
						if (trim($id_equipment[$j])==trim($result[0])) {
							
								echo "<td><input style='border: none'  type='text' name='list[]' id='list'  size='35' value='$result[1]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='chem[]' id='chem'  size='10' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='bran[]' id='bran'  size='10' value='$result[3]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='grande[]' id='grande'  size='10' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='size[]' id='size'  size='8' value='$result[4]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='price[]' id='price'  size='8' value='$result[5]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='amount1[]' id='amount1'  size='8' value='$amout[$j]' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='amount2[]' id='amount1'  size='8' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='sum[]' id='sum'  size='8' value='' readonly></td>";

								echo "<td><input style='border: none'  type='text' name='comment[]' id='comment'  size='15' value='$Status[$j]' readonly></td>";
							
								$count++;
								$No++;
						}

					}
				}
				echo "</tr>";
			}

			 $sql_fetch_scrounge = "SELECT * FROM  scrounge";
 			 $query = mysqli_query($conn,$sql_fetch_scrounge);
 			 
					$k=0;
 			 while ($result = mysqli_fetch_array($query)) {
 			 	if (($_SESSION['code'] == $result['id_user']) && ($_SESSION['date_save'.$page]==$result['date_save'])) {
 			 		
 			 	
 			 	$id_user[$k] = $result['id_user'];
 			 	$id_chemicals[$k] = $result['id_chemicals'];
 			 	$amout[$k] = $result['amout'];
 			 	$scrounge_date[$k]	 = $result['scrounge_date'];
 			 	$date_save[$k] = $result['date_save'];
 			 	$scientist[$k] = $result['scientist'];
 			 		$k++;
 			 		
 			 	}
 			 	
 			 }
 			 for ($l=0; $l < $k; $l++) { 
 			 	$sql_fetch_chem = "SELECT * FROM chemicals";
					$query_chem = mysqli_query($conn,$sql_fetch_chem);
					
					echo $id_chemicals[0];
					while ($result = mysqli_fetch_array($query_chem)) {
						if (trim($id_chemicals[$l])==trim($result[0])) {
						echo "<tr>";
							echo "<td>".$No."</td>";
									echo "<td><input style='border: none'  type='text' name='list[]' id='list'  size='35' value='$result[2]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='chem[]' id='chem'  size='10' value='$result[3]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='bran[]' id='bran'  size='10' value='$result[4]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='grande[]' id='grande'  size='10' value='$result[5]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='size[]' id='size'  size='10' value='$result[6]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='price[]' id='price'  size='8' value='$result[7]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='amount1[]' id='amount1'  size='8' value='$amout[$l]' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='amount2[]' id='amount2'  size='8' value='' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='sum[]' id='sum'  size='8' value='' readonly></td>";

									echo "<td><input style='border: none'  type='text' name='comment[]' id='comment'  size='15' value='chemicals' readonly></td>";
									echo "</tr>";

					}
 			 		
 			 	}
 			 	$No++;
 			 }

 		}
 		?>

 		</form>
 		</center>
 		<?php  

 		
 			

 		
		fetch_table();

 		
 ?>
 </table>


  <footer class="footer"><hr>
      	<div class="container">
        <p class="text-muted" align = "right">Guide_Little.</p>
      	</div>
    	</footer>

</body>
</html>
 