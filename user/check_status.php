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
              echo $_SESSION['name']
            
            ?></a></li>

        <li><a href="../logout_test.php" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"> ออกจากระบบ</span></a></li>
        
      </ul>
      </div>
      </div>
      </div>
      </nav>
        </div><br><br>

        <!-- <div class="container">
          <center>
            <div class="input-group col-sm-3">
            <input type="text" class="form-control " placeholder="Search">
            <div class="input-group-btn">
            <button type="submit" class="btn"><i class="glyphicon glyphicon-search"></i></button>
            </div>
            </center>
        </div><br><br> -->

        <div class="container"><center>
        	<table class="table_check" style="width: 70%">
        		<thead>
        			<tr>
        				<th><center>ลำดับ</center> </th>
        				<th><center>วันที่ยื่น</center></th>
        				<th><center>อาจารย์ที่ปรึกษา</center></th>
        				<th><center>เจ้าหน้าที่ห้องปฏิบัติการ</center></th>
        				<th><center>รายละเอียด</center></th>
        				<th><center>พิมพ์เอกสาร</center></th>

        			</tr>
        		</thead>

            <?php 
            include "../Database.php";
            $sql_check = "SELECT * FROM check_status_approvers";
            $query = mysqli_query($conn,$sql_check);
            $i=0;
            while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC))  {
              if ($_SESSION['code']==$result['Description']) {
                # code...
              
              $id_check = $result['id_check_status'];
              $date_save = $result['date_save'];
              $teacher = $result ['teacher'];
              $Laboratory_staff = $result['Laboratory_staff'];
              $_SESSION['date_save'.$i] = $result['date_save'];
              echo $_SESSION['date_save'.$i]."xxxxxxxxx<br>";
             
             ?>
        	

          <tbody>
            <tr>
              <td><center><?php echo  $id_check; ?></center></td>

              <td><center><?php echo $date_save;?></center></td>

              <td><?php if ($teacher == 'no') { 
              }else{
                echo "<center><i class='glyphicon glyphicon-ok' style='font-size:20px;color:#00b33c;'></i></center>";
              } ?></td>

              <td><?php if ($Laboratory_staff == 'no') {
               
              }else{
                echo "<center><i class='glyphicon glyphicon-ok' style='font-size:20px;color:#00b33c;'></i></center>";
              }?></td>
              <td ><center><a href="show_Description.php?page=<?php echo $i;?>"><i class="fa fa-file-text-o" style="font-size:20px" ></i></a></center></td>
              <td ><center><a target ="_blank" href="print_out.php?page=<?php echo $i;?>" ><i class="fa fa-print" style="font-size:20px" ></i></a></center></td>
            </tr>

          <?php $i++; } } ?>

          </tbody>
          </table>


        </center>
        </div>





        <footer class="footer"><hr>
      	<div class="container">
        <p class="text-muted" align = "right">Guide_Little.</p>
      	</div>
    	</footer>

</body>
</html>