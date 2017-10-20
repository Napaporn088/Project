<!DOCTYPE html>
<html>
<head>
	<title>คืนอุปกรณ์</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.minn.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../jquery-ui.css">
    <script src="../external/jquery/jquery.js"></script>
    <script src="../jquery-ui.js"></script>

    <link rel="stylesheet" type="text/css" href="../menu.css">

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
                 <a class="navbar-brand" href="index_authorities.php">ระบบจองสารเคมี/วัสดุ/เครื่องแก้ว</a>
            </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_authorities.php"><span class="glyphicon glyphicon-home " aria-hidden="true"> หน้าแรก </span></a></li>

        <li><a href="retrn_equipment.php">คืนอุปกรณ์</a></li>

        <li><a href="show_chemical_authorities.php">รายชื่อสารเคมี</a></li>

        <li><a href="show_equipment_authorities.php">รายชื่อวัสดุและเครื่องแก้ว</a></li>

         
         <li class="dropdown"><a data-toggle="dropdown">ตรวจสอบ<span class="caret"></span> </a>

            <ul class="dropdown-menu" >
             <li><a href="summarize_today_chem.php">สรุปการใช้สารเคมีที่ต้องการเบิกวันนี้</a></li>
              <li><a href="summarize_today_equipment.php">สรุปการใช้วัสดุ เครื่องแก้วที่ต้องการเบิกวันนี้</a></li>
              <li><a href="chemical_user.php">สรุปการใช้สารเคมีของนิสิต</a></li>
              <li><a href="use_of_chemicals_user.php">สรุปการใช้สารเคมีโดยกำหนดวันที่</a></li>
              <li><a href="check_bottle.php">สรุปการใช้สารเคมีแต่ละขวด</a></li>
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
<br>
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
	<div class="container">

          <h2 class="page-header">คืนรายการวัสดุ เครื่องแก้ว</h2>
                    
        
            <center>
             <form class="form-horizontal ">  
             	<strong> รหัสนิสิต : </strong> <input type="text" name="search" placeholder=" search" >&emsp;&emsp;
  				<strong> ชื่อ-นามสกุล: </strong> <input type="text" name="search1" placeholder=" search" >  <br><br>

			  	<button type="button" class="btn btn-default btn-sm ">
			      <span class="glyphicon glyphicon-search "></span> 
			    </button>
      	  	</form><br><br>


      	  		<table class="table_check" style="width: 80%">
      	  			<tr>
      	  				<th style="width: 3%"><center>ลำดับ</center></th>
      	  				<th style="width: 10%"><center>รหัสนิสิต</center></th>
      	  				<th style="width: 15%"><center>ชื่อ-นามสกุล</center></th>
      	  				<th style="width: 15%"><center>วันที่</center></th>
      	  				<th style="width: 10%"><center>รายการ</center></th>
      	  				<th style="width: 10%"><center>จำนวนเงิน</center></th>
      	  				<th style="width: 15%"><center>หมายเหตุ</center></th>

      	  			</tr>
      	  		</table>

            </center></div>
              


</body>
</html>