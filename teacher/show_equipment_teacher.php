<!DOCTYPE html>
<html>
<head>
  <title>แสดงรายการวัสดุและเครื่องแก้ว</title>
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
                 <a class="navbar-brand" href="index_teacher.php">ระบบจองสารเคมี/วัสดุ/เครื่องแก้ว</a>
            </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_teacher.php"><span class="glyphicon glyphicon-home " aria-hidden="true"> หน้าแรก </span></a></li>

        <li><a href="show_chemical_teacher.php">รายชื่อสารเคมี</a></li>

        <li><a href="show_equipment_teacher.php">รายชื่อวัสดุและเครื่องแก้ว</a></li>

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
<br>
       

</head>
<body>

<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 

    </div><center>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active"><a href="index_teacher.php" class=" glyphicon glyphicon-home"> หน้าแรก<span style="font-size:16px;" ></span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">หมวด....<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="#"><center>หมวด A</center></a></li>
            <li><a href="#"><center>หมวด B</center></a></li>
            <li><a href="#"><center>หมวด C</center></a></li>
            <li><a href="#"><center>หมวด D</center></a></li>
            <li><a href="#"><center>หมวด E</center></a></li>
            <li><a href="#"><center>หมวด F</center></a></li>
            <li><a href="#"><center>หมวด G</center></a></li>
            <li><a href="#"><center>หมวด H</center></a></li>
            <li><a href="#"><center>หมวด I</center></a></li>
            <li><a href="#"><center>หมวด J</center></a></li>
            <li><a href="#"><center>หมวด K</center></a></li>
            <li><a href="#"><center>หมวด L</center></a></li>
            <li><a href="#"><center>หมวด M</center></a></li>
            <li><a href="#"><center>หมวด N</center></a></li>
            <li><a href="#"><center>หมวด O</center></a></li>
            <li><a href="#"><center>หมวด P</center></a></li>
            <li><a href="#"><center>หมวด Q</center></a></li>
            <li><a href="#"><center>หมวด R</center></a></li>
            <li><a href="#"><center>หมวด S</center></a></li>
            <li><a href="#"><center>หมวด T</center></a></li>
            <li><a href="#"><center>หมวด U</center></a></li>
            <li><a href="#"><center>หมวด V</center></a></li>
            <li><a href="#"><center>หมวด W</center></a></li>
            <li><a href="#"><center>หมวด X</center></a></li>
            <li><a href="#"><center>หมวด Y</center></a></li>
            <li><a href="#"><center>หมวด Z</center></a></li>

          </ul>

    </div>
  </div>
  </center>
</nav>


<div class="main">
          <h2 class="page-header">รายการวัสดุ เครื่องแก้ว</h2>

          
          <div class="container">
            
          <center>
            <div class="input-group col-sm-5">
              <input type="text" class="form-control " placeholder="Search">
                <div class="input-group-btn">
                   <button type="submit" class="btn"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </center><br><br>
              
          
          <div class="table-responsive" >
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 5%"><center>ลำดับ</center></th>
                  <th style="width: 30%"><center>รายชื่ออุปกรณ์</center></th>
                  <th style="width: 10%"><center>จำนวน</center></th>
                  <th style="width: 10%"><center>จำนวนที่จอง</center></th>
                  <th style="width: 10%"><center>รายละเอียด</center></th>
                </tr>
              </thead>

              <?php 
                
                require "../Database.php";
                $sql = "SELECT name, amout FROM equipment Order By name";
                $query = mysqli_query($conn,$sql);
                $i=1;
                while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                  # code...
                
              ?>

              <tbody>
                <tr>
                  <td><center><?php echo $i++; ?></center></td>
                  <td><?php echo $result['name']; ?></td>
                  <td><?php echo $result['amout']; ?></td>
                  <td>dolor</td>
                  <td><center><button type="button" class="btn btn-success btn-xs">คลิก!!</button></center></td>
                </tr>
               
              </tbody>
              <?php 

    };
      

      $conn->close();
       ?>

            </table>
          </div>
        </div>

</body>
</html>