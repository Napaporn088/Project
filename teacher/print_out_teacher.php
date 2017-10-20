<!DOCTYPE html>
<html>
<head>
	<title></title>


<?php session_start();  ?>

<!-- 	<style>
@media screen {
  .hide-on-screen { display: none; }
}
</style> -->
<script language="javascript">

window.print();

</script>
<style>
table {
    border-collapse: collapse;

}

table,tr, td, th {
    border: 1px solid black;
    font-size: 16px;
	height: 35px;
	text-align: center;
   
}
</style>
</head>
<body>



			<br>
           <center> <h3>แบบฟอร์มเบิก / ยืม สารเคมี วัสดุ เครื่องแก้ว</h3></center></div>
           <?php 
           function fetch_teacher(){
           		include "../Database.php";
           		$sql_user = "SELECT * FROM user";
           		$query = mysqli_query($conn,$sql_user);
           		$page = $_GET['page'];
           		while ($result = mysqli_fetch_array($query)) {
           		if (($_SESSION['code']==$result['code']) && ($_SESSION['date_save'.$page]==$result['date_save'])) {
           				$_SESSION['code'] = $result['code'];
           				$_SESSION['room'] = $result['room'];
           				$_SESSION['name'] = $result['name'];
           				$_SESSION['major'] = $result['major'];
           				$_SESSION['telephone_num'] = $result['telephone_num'];
           				$_SESSION['type'] = $result['type'];
           				$_SESSION['position'] = $result['position'];
           				$_SESSION['demand'] = $result['demand'];
           				$_SESSION['demand_text'] = $result['demand_text'];

           			}	
           		}

           }
			fetch_teacher() ;
           ?>
           
            <center> ห้องปฎิบัติการ <?php echo $_SESSION['room'];  ?> คณะวิทยาศาสตร์การแพทย์ </center><br>
           
           <center><strong>ชื่อ-นามสกุล : </strong><?php echo $_SESSION['name']; ?> &emsp;&emsp; 
           <strong> รหัสนิสิต : </strong><?php echo $_SESSION['code']; ?> &emsp;&emsp; 
           <strong> เบอร์โทร : </strong><?php echo $_SESSION['telephone_num']; ?> &emsp;&emsp; 
           <strong> สาขาวิชา : </strong> <?php echo $_SESSION['major']; ?> &emsp;&emsp;  
           <strong>คณะ : </strong>วิทยาศาสตร์การแพทย์ 
           
       </center><br>
       <center>
           	<?php
           	 $in = $_SESSION['position'];
              require "../Database.php";
              $sql = "SELECT * FROM user_position WHERE id_position=$in ";
              $query = mysqli_query($conn,$sql);
              $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
              
              echo  $result['position_name'];?>&emsp;&emsp; <strong> มีความประสงค์ขอเบิก/ยืม รายการวัสดุ สารเคมีต่อไปนี้จากห้องปฎิบัติการเพื่อใช้ในงาน </strong><?php echo  $_SESSION['demand'].$_SESSION['demand_text'] ; ?></p>
		</center><br>
	       <center>
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
		
 		function fetch_table_teacher(){
 			 include "../Database.php";
 			 $sql_fetch_borrow = "SELECT * FROM  borrow";
 			 $query = mysqli_query($conn,$sql_fetch_borrow);
 			 $i=0;
 			 $page= $_GET['page'];
 			 
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
			<form  >
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
								
								echo "<td> <input style='border: none'  type='text' name='list[]' id='list'  size='35' value='$result[1]' readonly></td>";

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

 		
 			

 		
		fetch_table_teacher();

 		
 ?>
 </table>
		<?php 
		function date_return1(){
			include "../Database.php";
			$sql_re = "SELECT * FROM borrow";
			$query = mysqli_query($conn,$sql_re);
			while ($result = mysqli_fetch_array($query)) {
				if ($query != ' ') {
					$_SESSION['date_re'] = $result['return_day'];
					$_SESSION['date_format'] = date("d-m-Y",strtotime($_SESSION['date_re']));

				
				}else{
					echo " ";
				}
				
			}
			}
		?>
		<?php 
			date_return1();
		 ?><br>
		<div style="padding-left: 20px; ">
				<strong>* วันที่คืน : </strong> <?php echo $_SESSION['date_format']; ?> 
				</div><br><br>

		<center>
		<table  border: 1px solid black width="70%" >
			<tr>
				<td>บันทึกการรับ-จ่าย</td>
				<td>บันทึกการคืน(เฉพาะเวัสดุ)</td>
				<td>เฉพาะเจ้าหน้าที่</td>
			</tr>
			<tr>
				<td >
					ลายมือชื่อผู้รับของ .......................<br>
					ลายมือชื่อผู้จ่ายของ .....................<br>
					วัน/เดือน/ปี ............./............/.........	
				</td>
				<td >
					ลายมือชื่อผู้คืนของ .....................<br>
					ลายมือชื่อผู้รับของ .....................<br>
					วัน/เดือน/ปี .........../........../..........	
				</td>
				<td >
					ค่าเครื่องแก้ว/วัสดุเสียหาย ...................<br>
					บิลเล่มที่ .................. เลขที่ ..................<br>
					หมายเหตุ ..............................................
				</td>
			</tr>
		</table>
		</center>

</body>
</html>