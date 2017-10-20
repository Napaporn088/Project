<!DOCTYPE html>
<html>
<head>
	<title>ตรวจสอบคำร้อง</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ระบบจองสารเคมี วัสดุและเครื่องแก้ว</title>

    <link href="../css/bootstrap.minn.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="../jquery-ui.css">
    <script src="../external/jquery/jquery.js"></script>
    <script src="../jquery-ui.js"></script>
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
              <li><a href="approve_teacher.php"><center>ตรวจสอบคำร้อง</center></a></li>
              <li><a href="check_status_teacher.php"><center>ตรวจสอบสถานะ</center></a></li>
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

              <style type="text/css">
    
    .table_chemical th{
      color: #222;
      padding: 10px 8px;
      background: #B4F9D1;
      border-collapse: collapse;
      border-bottom: 2px solid #ccc;
      border: 1px solid #B0B0B0;
      text-align:left;

    }
    .table_chemical td{
      border-bottom: 1px solid #ccc;
      color: #666;
      background: #fff;
      padding: 10px;
      border: 1px solid #B0B0B0;
      text-align: left;
    }
    .table_chemical tbody tr:hover td{
      color: #111;
      background: #eee;
      border: 1px solid #B0B0B0;
      text-align: left;
    }
  </style>
</head>
<body>


        <div class="container">
          <center>
            <div class="input-group col-sm-3">
            <input type="text" class="form-control " placeholder="Search">
            <div class="input-group-btn">
            <button type="submit" class="btn"><i class="glyphicon glyphicon-search"></i></button>
            </div>
            </center>
        </div><br><br>

        <div class="tabel_check"><center>
        	<table class="table_chemical" style="width: 70%">
        		<thead>
        			<tr>
        				<th rowspan="2"><center> ลำดับ</center></th>
                <th rowspan="2"><center>รหัสนิสิต</center></th>
                <th rowspan="2"><center>ชื่อ-นามสกุล</center></th>
        				<th rowspan="2"><center>วันที่ยื่น</center></th>
        				<th colspan="2"><center>อาจารย์ที่ปรึกษา</center></th>
        				<th rowspan="2" align="right"><center>รายละเอียด</center></th>
        				<th rowspan="2" align="right"><center>หมายเหตุ</center></th>
        				<th rowspan="2" align="right"><center>พิมพ์เอกสาร</center></th>
        			</tr>
        			<tr>
        				<th><center>อนุมัติ</center></th>
        				<th><center>ไม่อนุมัติ</center></th>
        			</tr>

        		</thead>
        	</table></center>
        </div>





        <footer class="footer"><hr>
      	<div class="container">
        <p class="text-muted" align = "right">Guide_Little.</p>
      	</div>
    	</footer>

</body>
</html>
