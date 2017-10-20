
<!DOCTYPE html>
<html>
<head>
  <title>แสดงรายการสารเคมี</title>
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

      </nav><br>

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
        <li class="active"><a href="index.php" class=" glyphicon glyphicon-home"> หน้าแรก<span style="font-size:16px;" ></span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">ทั่วไป<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_chemical.php?page=A"><center>หมวด A</center></a></li>
            <li><a href="show_chemical.php?page=B"><center>หมวด B</center></a></li>
            <li><a href="show_chemical.php?page=C"><center>หมวด C</center></a></li>
            <li><a href="show_chemical.php?page=D"><center>หมวด D</center></a></li>
            <li><a href="show_chemical.php?page=E"><center>หมวด E</center></a></li>
            <li><a href="show_chemical.php?page=F"><center>หมวด F</center></a></li>
            <li><a href="show_chemical.php?page=G"><center>หมวด G</center></a></li>
            <li><a href="show_chemical.php?page=H"><center>หมวด H</center></a></li>
            <li><a href="show_chemical.php?page=I"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=J"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=K"><center>หมวด K</center></a></li>
            <li><a href="show_chemical.php?page=L"><center>หมวด L</center></a></li>
            <li><a href="show_chemical.php?page=M"><center>หมวด M</center></a></li>
            <li><a href="show_chemical.php?page=N"><center>หมวด N</center></a></li>
            <li><a href="show_chemical.php?page=O"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=P"><center>หมวด P</center></a></li>
            <li><a href="show_chemical.php?page=Q"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=R"><center>หมวด R</center></a></li>
            <li><a href="show_chemical.php?page=S"><center>หมวด S</center></a></li>
            <li><a href="show_chemical.php?page=T"><center>หมวด T</center></a></li>
            <li><a href="show_chemical.php?page=U"><center>หมวด U</center></a></li>
            <li><a href="show_chemical.php?page=V"><center>หมวด V</center></a></li>
            <li><a href="show_chemical.php?page=W"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=X"><center>หมวด X</center></a></li>
            <li><a href="show_chemical.php?page=Y"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=Z"><center>หมวด Z</center></a></li>

          </ul>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">อาหารเลี้ยงเชื้อ<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_chemical.php?page=A_in"><center>หมวด A</center></a></li>
            <li><a href="show_chemical.php?page=B_in"><center>หมวด B</center></a></li>
            <li><a href="show_chemical.php?page=C_in"><center>หมวด C</center></a></li>
            <li><a href="show_chemical.php?page=D_in"><center>หมวด D</center></a></li>
            <li><a href="show_chemical.php?page=E_in"><center>หมวด E</center></a></li>
            <li><a href="show_chemical.php?page=F_in"><center>หมวด F</center></a></li>
            <li><a href="show_chemical.php?page=G_in"><center>หมวด G</center></a></li>
            <li><a href="show_chemical.php?page=H_in"><center>หมวด H</center></a></li>
            <li><a href="show_chemical.php?page=I_in"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=J_in"><center>หมวด J</center></a></li>
            <li><a href="show_chemical.php?page=K_in"><center>หมวด K</center></a></li>
            <li><a href="show_chemical.php?page=L_in"><center>หมวด L</center></a></li>
            <li><a href="show_chemical.php?page=M_in"><center>หมวด M</center></a></li>
            <li><a href="show_chemical.php?page=N_in"><center>หมวด N</center></a></li>
            <li><a href="show_chemical.php?page=O_in"><center>หมวด O</center></a></li>
            <li><a href="show_chemical.php?page=P_in"><center>หมวด P</center></a></li>
            <li><a href="show_chemical.php?page=Q_in"><center>หมวด Q</center></a></li>
            <li><a href="show_chemical.php?page=R_in"><center>หมวด R</center></a></li>
            <li><a href="show_chemical.php?page=S_in"><center>หมวด S</center></a></li>
            <li><a href="show_chemical.php?page=T_in"><center>หมวด T</center></a></li>
            <li><a href="show_chemical.php?page=U_in"><center>หมวด U</center></a></li>
            <li><a href="show_chemical.php?page=V_in"><center>หมวด V</center></a></li>
            <li><a href="show_chemical.php?page=W_in"><center>หมวด W</center></a></li>
            <li><a href="show_chemical.php?page=X_in"><center>หมวด X</center></a></li>
            <li><a href="show_chemical.php?page=Y_in"><center>หมวด Y</center></a></li>
            <li><a href="show_chemical.php?page=Z_in"><center>หมวด Z</center></a></li>

          </ul>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">น้ำตาล<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_chemical.php?page=A_sugar"><center>หมวด A</center></a></li>
            <li><a href="show_chemical.php?page=B_sugar"><center>หมวด B</center></a></li>
            <li><a href="show_chemical.php?page=C_sugar"><center>หมวด C</center></a></li>
            <li><a href="show_chemical.php?page=D_sugar"><center>หมวด D</center></a></li>
            <li><a href="show_chemical.php?page=E_sugar"><center>หมวด E</center></a></li>
            <li><a href="show_chemical.php?page=F_sugar"><center>หมวด F</center></a></li>
            <li><a href="show_chemical.php?page=G_sugar"><center>หมวด G</center></a></li>
            <li><a href="show_chemical.php?page=H_sugar"><center>หมวด H</center></a></li>
            <li><a href="show_chemical.php?page=I_sugar"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=J_sugar"><center>หมวด J</center></a></li>
            <li><a href="show_chemical.php?page=K_sugar"><center>หมวด K</center></a></li>
            <li><a href="show_chemical.php?page=L_sugar"><center>หมวด L</center></a></li>
            <li><a href="show_chemical.php?page=M_sugar"><center>หมวด M</center></a></li>
            <li><a href="show_chemical.php?page=N_sugar"><center>หมวด N</center></a></li>
            <li><a href="show_chemical.php?page=O_sugar"><center>หมวด O</center></a></li>
            <li><a href="show_chemical.php?page=P_sugar"><center>หมวด P</center></a></li>
            <li><a href="show_chemical.php?page=Q_sugar"><center>หมวด Q</center></a></li>
            <li><a href="show_chemical.php?page=R_sugar"><center>หมวด R</center></a></li>
            <li><a href="show_chemical.php?page=S_sugar"><center>หมวด S</center></a></li>
            <li><a href="show_chemical.php?page=T_sugar"><center>หมวด T</center></a></li>
            <li><a href="show_chemical.php?page=U_sugar"><center>หมวด U</center></a></li>
            <li><a href="show_chemical.php?page=V_sugar"><center>หมวด V</center></a></li>
            <li><a href="show_chemical.php?page=W_sugar"><center>หมวด W</center></a></li>
            <li><a href="show_chemical.php?page=X_sugar"><center>หมวด X</center></a></li>
            <li><a href="show_chemical.php?page=Y_sugar"><center>หมวด Y</center></a></li>
            <li><a href="show_chemical.php?page=Z_sugar"><center>หมวด Z</center></a></li>

          </ul>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">สี<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_chemical.php?page=A_color"><center>หมวด A</center></a></li>
            <li><a href="show_chemical.php?page=B_color"><center>หมวด B</center></a></li>
            <li><a href="show_chemical.php?page=C_color"><center>หมวด C</center></a></li>
            <li><a href="show_chemical.php?page=D_color"><center>หมวด D</center></a></li>
            <li><a href="show_chemical.php?page=E_color"><center>หมวด E</center></a></li>
            <li><a href="show_chemical.php?page=F_color"><center>หมวด F</center></a></li>
            <li><a href="show_chemical.php?page=G_color"><center>หมวด G</center></a></li>
            <li><a href="show_chemical.php?page=H_color"><center>หมวด H</center></a></li>
            <li><a href="show_chemical.php?page=I_color"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=J_color"><center>หมวด J</center></a></li>
            <li><a href="show_chemical.php?page=K_color"><center>หมวด K</center></a></li>
            <li><a href="show_chemical.php?page=L_color"><center>หมวด L</center></a></li>
            <li><a href="show_chemical.php?page=M_color"><center>หมวด M</center></a></li>
            <li><a href="show_chemical.php?page=N_color"><center>หมวด N</center></a></li>
            <li><a href="show_chemical.php?page=O_color"><center>หมวด O</center></a></li>
            <li><a href="show_chemical.php?page=P_color"><center>หมวด P</center></a></li>
            <li><a href="show_chemical.php?page=Q_color"><center>หมวด Q</center></a></li>
            <li><a href="show_chemical.php?page=R_color"><center>หมวด R</center></a></li>
            <li><a href="show_chemical.php?page=S_color"><center>หมวด S</center></a></li>
            <li><a href="show_chemical.php?page=T_color"><center>หมวด T</center></a></li>
            <li><a href="show_chemical.php?page=U_color"><center>หมวด U</center></a></li>
            <li><a href="show_chemical.php?page=V_color"><center>หมวด V</center></a></li>
            <li><a href="show_chemical.php?page=W_color"><center>หมวด W</center></a></li>
            <li><a href="show_chemical.php?page=X_color"><center>หมวด X</center></a></li>
            <li><a href="show_chemical.php?page=Y_color"><center>หมวด Y</center></a></li>
            <li><a href="show_chemical.php?page=Z_color"><center>หมวด Z</center></a></li>

          </ul>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">ยา<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_chemical.php?page=A_drug"><center>หมวด A</center></a></li>
            <li><a href="show_chemical.php?page=B_drug"><center>หมวด B</center></a></li>
            <li><a href="show_chemical.php?page=C_drug"><center>หมวด C</center></a></li>
            <li><a href="show_chemical.php?page=D_drug"><center>หมวด D</center></a></li>
            <li><a href="show_chemical.php?page=E_drug"><center>หมวด E</center></a></li>
            <li><a href="show_chemical.php?page=F_drug"><center>หมวด F</center></a></li>
            <li><a href="show_chemical.php?page=G_drug"><center>หมวด G</center></a></li>
            <li><a href="show_chemical.php?page=H_drug"><center>หมวด H</center></a></li>
            <li><a href="show_chemical.php?page=I_drug"><center>หมวด I</center></a></li>
            <li><a href="show_chemical.php?page=J_drug"><center>หมวด J</center></a></li>
            <li><a href="show_chemical.php?page=K_drug"><center>หมวด K</center></a></li>
            <li><a href="show_chemical.php?page=L_drug"><center>หมวด L</center></a></li>
            <li><a href="show_chemical.php?page=M_drug"><center>หมวด M</center></a></li>
            <li><a href="show_chemical.php?page=N_drug"><center>หมวด N</center></a></li>
            <li><a href="show_chemical.php?page=O_drug"><center>หมวด O</center></a></li>
            <li><a href="show_chemical.php?page=P_drug"><center>หมวด P</center></a></li>
            <li><a href="show_chemical.php?page=Q_drug"><center>หมวด Q</center></a></li>
            <li><a href="show_chemical.php?page=R_drug"><center>หมวด R</center></a></li>
            <li><a href="show_chemical.php?page=S_drug"><center>หมวด S</center></a></li>
            <li><a href="show_chemical.php?page=T_drug"><center>หมวด T</center></a></li>
            <li><a href="show_chemical.php?page=U_drug"><center>หมวด U</center></a></li>
            <li><a href="show_chemical.php?page=V_drug"><center>หมวด V</center></a></li>
            <li><a href="show_chemical.php?page=W_drug"><center>หมวด W</center></a></li>
            <li><a href="show_chemical.php?page=X_drug"><center>หมวด X</center></a></li>
            <li><a href="show_chemical.php?page=Y_drug"><center>หมวด Y</center></a></li>
            <li><a href="show_chemical.php?page=Z_drug"><center>หมวด Z</center></a></li>

          </ul>
        
    </div>
  </div>
  </center>
</nav>
<br>
        <div class="main">
          <h2 class="page-header">รายการสารเคมี</h2>
          
          <div class="container">
            
           <center>
          
            <form  method="post" action="../form_chemical.php"> 
            <div class="input-group col-md-3">
                <input type="text" class="form-control" placeholder="Search" name="txt_search" id="txt_search" value="">
            <div class="input-group-btn ">
                <input class="btn btn-default" type="submit" value="ค้นหา">
                

            </div>
            </div>
            </form>
            
            </center></div><br><br>
              
          
          <div class="container" >
            <center>
            <table class="table_chemical" style="width: 70%"">
              <thead>
                <tr>
                  <th style="width: 5%"><center>ลำดับ</center></th>
                  <th style="width: 30%"><center>รายชื่อ</center></th>
                  <th style="width: 15%"><center>สูตรเคมี</center></th>
                  <th style="width: 10%"><center>ยี่ห้อ</center></th>
                  <th style="width: 10%"><center>เกรด</center></th>
                  <th style="width: 10%"><center>ขนาด</center></th>
                  <th style="width: 10%"><center>ราคา</center></th>
                  <th style="width: 10%"><center>จำนวน</center></th>
                  
                </tr>
              </thead>

              


              <?php 
                 
                include "../Database.php";
                $row = 20;
                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                }else {
                  $page = 1;
                }
                
                $sum = ($page-1)*$row;
                $total_data = ("SELECT *FROM chemicals");
                $query = mysqli_query($conn,$total_data);
                
                 
                  $count = 0;
                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                      $Name[$count] = $result['name'];
                      $chem_formula = $result['chemical_formula'];
                      $brand = $result['brand'];
                      $grade = $result['grade'];
                      $size = $result['size'];
                      $price = $result['price/unit'];
                      $Amout[$count] = $result['Remaining'];

                      $count++; 
                    }
                
                
              
               ?>
               <?php 
               echo "COunt".$count;
               $total_page = ceil($count/$row);
               echo $total_page ;

               ?>
              

              <?php  
              function page_chem(){
               include "../Database.php";
                $row = 20;
                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                }else {
                  $page = 1;
                }
                
                $sum = ($page-1)*$row;
                $total_data = ("SELECT *FROM chemicals");
                $query = mysqli_query($conn,$total_data);
                
                 
                  $count = 0;
                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                      $Name[$count] = $result['name'];
                      $chem_formula = $result['chemical_formula'];
                      $brand = $result['brand'];
                      $grade = $result['grade'];
                      $size = $result['size'];
                      $price = $result['price/unit'];
                      $Amout[$count] = $result['Remaining'];

                      $count++; 
                    }
                
                
              
               ?>
               <?php 
               echo "COunt".$count;
               $total_page = ceil($count/$row);
               echo $total_page ;


              if (($_SESSION['key'] == "")) {
                  
                  include "../Database.php";
   
      

                  $sql = "SELECT * FROM chemicals Limit {$sum},{$row }"  ;
                   echo $sql ;
                  $query = mysqli_query($conn,$sql);
                  $i=($page*$row)-$row;
                  $count = 0;

                  echo "<br>".$count;
                  while ($result = mysqli_fetch_array($query)) {
                      $Name[$count] = $result['name'];
                      $chem_formula[$count] = $result['chemical_formula'];
                      $brand[$count] = $result['brand'];
                      $grade[$count] = $result['grade'];
                      $size[$count] = $result['size'];
                      $price[$count] = $result['price/unit'];
                      $Amout[$count] = $result['Remaining'];

                      $i++;
                      ?>
                        <tbody>
                          <tr>
                            <td><center><?php echo $i; ?></center></td>
                            <td><?php echo $Name[$count]; ?></td>
                            <td><center><?php echo $chem_formula[$count]; ?></center></td>
                            <td><center><?php echo $brand[$count]; ?></center></td>
                            <td><center><?php echo $grade[$count]; ?></center></td>
                            <td><center><?php echo $size[$count]; ?></center></td>
                            <td><center><?php echo $price[$count]; ?></center></td>
                            <td><center><?php echo $Amout[$count]; ?></center></td>
                            
                        </tbody>
                      <?php
                    $count++;
                  };
                  /*echo "COunt".$count;
                  $row = 20;
                  $total=ceil($count/$row) ;
                  $start = $page*$row;
                  echo $total;
                  
                ?><a target ="_blank" href=" " </a>

                
                <?php */
                    
        
                    
                    $conn->close();


              }
              else if(($_SESSION['key'] != "")){
                  require "../Database.php";
                  $txt_search =  $_SESSION['key'];
                  $sql = "SELECT * FROM chemicals WHERE (name LIKE '".$txt_search."%' ) "  ;
                  $query = mysqli_query($conn,$sql);
                  $i=1;

                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                ?>

                
                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><center><?php echo $result['chemical_formula'];; ?></center></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['grade']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['Remaining']; ?></center></td>
                    
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                  }
                }

              ?>

              <?php
                function search_page_chem($Page_T){
                  $TYPE = "general".$Page_T;
                  include "../Database.php";
                  $sql = "SELECT * FROM chemicals WHERE type LIKE '%$TYPE%' ORDER BY type DESC ";
                  $query = mysqli_query($conn,$sql);
                  $i=1;

                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                ?>

                
                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><center><?php echo $result['chemical_formula'];; ?></center></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['grade']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['Remaining']; ?></center></td>
                    
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                    }

                  function search_page_chem_IN($Page_T){
                  $TYPE = "infection".$Page_T;
                  include "../Database.php";
                  $sql = "SELECT * FROM chemicals WHERE type LIKE '%$TYPE%' ORDER BY type DESC ";
                  $query = mysqli_query($conn,$sql);
                  $i=1;

                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                ?>

                
                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><center><?php echo $result['chemical_formula'];; ?></center></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['grade']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['Remaining']; ?></center></td>
                    
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                    }

                  function search_page_chem_sugar($Page_T){
                  $TYPE = "sugar".$Page_T;
                  include "../Database.php";
                  $sql = "SELECT * FROM chemicals WHERE type LIKE '%$TYPE%' ORDER BY type DESC ";
                  $query = mysqli_query($conn,$sql);
                  $i=1;

                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                ?>

                
                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><center><?php echo $result['chemical_formula'];; ?></center></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['grade']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['Remaining']; ?></center></td>
                    
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                    }

                  function search_page_chem_color($Page_T){
                  $TYPE = "color".$Page_T;
                  include "../Database.php";
                  $sql = "SELECT * FROM chemicals WHERE type LIKE '%$TYPE%' ORDER BY type DESC ";
                  $query = mysqli_query($conn,$sql);
                  $i=1;

                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                ?>

                
                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><center><?php echo $result['chemical_formula'];; ?></center></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['grade']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['Remaining']; ?></center></td>
                    
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                    }

                  function search_page_chem_drug($Page_T){
                  $TYPE = "drug".$Page_T;
                  include "../Database.php";
                  $sql = "SELECT * FROM chemicals WHERE type LIKE '%$TYPE%' ORDER BY type DESC ";
                  $query = mysqli_query($conn,$sql);
                  $i=1;

                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                ?>

                
                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><center><?php echo $result['chemical_formula'];; ?></center></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['grade']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['Remaining']; ?></center></td>
                    
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                    }
              ?>

              <?php  
              switch ($_GET['page']) {
                    case 'A': search_page_chem($_GET['page']);
                      break;
                    case 'B': search_page_chem($_GET['page']);
                      break;
                    case 'C': search_page_chem($_GET['page']);
                      break;
                    case 'D': search_page_chem($_GET['page']);
                      break;
                    case 'E': search_page_chem($_GET['page']);
                      break;
                    case 'F': search_page_chem($_GET['page']);
                      break;
                    case 'G': search_page_chem($_GET['page']);
                      break;
                    case 'H': search_page_chem($_GET['page']);
                      break;
                    case 'I': search_page_chem($_GET['page']);
                      break;
                    case 'J': search_page_chem($_GET['page']);
                      break;
                    case 'K': search_page_chem($_GET['page']);
                      break;
                    case 'L': search_page_chem($_GET['page']);
                      break;
                    case 'M': search_page_chem($_GET['page']);
                      break;
                    case 'N': search_page_chem($_GET['page']);
                      break;
                    case 'O': search_page_chem($_GET['page']);
                      break;
                    case 'P': search_page_chem($_GET['page']);
                      break;
                    case 'Q': search_page_chem($_GET['page']);
                      break;
                    case 'R': search_page_chem($_GET['page']);
                      break;
                    case 'S': search_page_chem($_GET['page']);
                      break;
                    case 'T': search_page_chem($_GET['page']);
                      break;
                    case 'U': search_page_chem($_GET['page']);
                      break;
                    case 'V': search_page_chem($_GET['page']);
                      break;
                    case 'W': search_page_chem($_GET['page']);
                      break;
                    case 'X': search_page_chem($_GET['page']);
                      break;
                    case 'Y': search_page_chem($_GET['page']);
                      break;
                    case 'Z': search_page_chem($_GET['page']);
                      break;

                    case 'A_in': search_page_chem_IN("A");
                      break;
                    case 'B_in': search_page_chem_IN("B");
                      break;
                    case 'C_in': search_page_chem_IN("C");
                      break;
                    case 'D_in': search_page_chem_IN("D");
                      break;
                    case 'E_in': search_page_chem_IN("E");
                      break;
                    case 'F_in': search_page_chem_IN("F");
                      break;
                    case 'G_in': search_page_chem_IN("G");
                      break;
                    case 'H_in': search_page_chem_IN("H");
                      break;
                    case 'I_in': search_page_chem_IN("I");
                      break;
                    case 'J_in': search_page_chem_IN("J");
                      break;
                    case 'K_in': search_page_chem_IN("K");
                      break;
                    case 'L_in': search_page_chem_IN("L");
                      break;
                    case 'M_in': search_page_chem_IN("M");
                      break;
                    case 'N_in': search_page_chem_IN("N");
                      break;
                    case 'O_in': search_page_chem_IN("O");
                      break;
                    case 'P_in': search_page_chem_IN("P");
                      break;
                    case 'Q_in': search_page_chem_IN("Q");
                      break;
                    case 'R_in': search_page_chem_IN("R");
                      break;
                    case 'S_in': search_page_chem_IN("S");
                      break;
                    case 'T_in': search_page_chem_IN("T");
                      break;
                    case 'U_in': search_page_chem_IN("U");
                      break;
                    case 'V_in': search_page_chem_IN("V");
                      break;
                    case 'W_in': search_page_chem_IN("W");
                      break;
                    case 'X_in': search_page_chem_IN("X");
                      break;
                    case 'Y_in': search_page_chem_IN("Y");
                      break;
                    case 'Z_in': search_page_chem_IN("Z");
                      break;

                    case 'A_sugar': search_page_chem_sugar("A");
                      break;
                    case 'B_sugar': search_page_chem_sugar("B");
                      break;
                    case 'C_sugar': search_page_chem_sugar("C");
                      break;
                    case 'D_sugar': search_page_chem_sugar("D");
                      break;
                    case 'E_sugar': search_page_chem_sugar("E");
                      break;
                    case 'F_sugar': search_page_chem_sugar("F");
                      break;
                    case 'G_sugar': search_page_chem_sugar("G");
                      break;
                    case 'H_sugar': search_page_chem_sugar("H");
                      break;
                    case 'I_sugar': search_page_chem_sugar("I");
                      break;
                    case 'J_sugar': search_page_chem_sugar("J");
                      break;
                    case 'K_sugar': search_page_chem_sugar("K");
                      break;
                    case 'L_sugar': search_page_chem_sugar("L");
                      break;
                    case 'M_sugar': search_page_chem_sugar("M");
                      break;
                    case 'N_sugar': search_page_chem_sugar("N");
                      break;
                    case 'O_sugar': search_page_chem_sugar("O");
                      break;
                    case 'P_sugar': search_page_chem_sugar("P");
                      break;
                    case 'Q_sugar': search_page_chem_sugar("Q");
                      break;
                    case 'R_sugar': search_page_chem_sugar("R");
                      break;
                    case 'S_sugar': search_page_chem_sugar("S");
                      break;
                    case 'T_sugar': search_page_chem_sugar("T");
                      break;
                    case 'U_sugar': search_page_chem_sugar("U");
                      break;
                    case 'V_sugar': search_page_chem_sugar("V");
                      break;
                    case 'W_sugar': search_page_chem_sugar("W");
                      break;
                    case 'X_sugar': search_page_chem_sugar("X");
                      break;
                    case 'Y_sugar': search_page_chem_sugar("Y");
                      break;
                    case 'Z_sugar': search_page_chem_sugar("Z");


                    case 'A_color': search_page_chem_color("A");
                      break;
                    case 'B_color': search_page_chem_color("B");
                      break;
                    case 'C_color': search_page_chem_color("C");
                      break;
                    case 'D_color': search_page_chem_color("D");
                      break;
                    case 'E_color': search_page_chem_color("E");
                      break;
                    case 'F_color': search_page_chem_color("F");
                      break;
                    case 'G_color': search_page_chem_color("G");
                      break;
                    case 'H_color': search_page_chem_color("H");
                      break;
                    case 'I_color': search_page_chem_color("I");
                      break;
                    case 'J_color': search_page_chem_color("J");
                      break;
                    case 'K_color': search_page_chem_color("K");
                      break;
                    case 'L_color': search_page_chem_color("L");
                      break;
                    case 'M_color': search_page_chem_color("M");
                      break;
                    case 'N_color': search_page_chem_color("N");
                      break;
                    case 'O_color': search_page_chem_color("O");
                      break;
                    case 'P_color': search_page_chem_color("P");
                      break;
                    case 'Q_color': search_page_chem_color("Q");
                      break;
                    case 'R_color': search_page_chem_color("R");
                      break;
                    case 'S_color': search_page_chem_color("S");
                      break;
                    case 'T_color': search_page_chem_color("T");
                      break;
                    case 'U_color': search_page_chem_color("U");
                      break;
                    case 'V_color': search_page_chem_color("V");
                      break;
                    case 'W_color': search_page_chem_color("W");
                      break;
                    case 'X_color': search_page_chem_color("X");
                      break;
                    case 'Y_color': search_page_chem_color("Y");
                      break;
                    case 'Z_color': search_page_chem_color("Z");
                      break;
                     

                    case 'A_drug': search_page_chem_drug("A");
                      break;
                    case 'B_drug': search_page_chem_drug("B");
                      break;
                    case 'C_drug': search_page_chem_drug("C");
                      break;
                    case 'D_drug': search_page_chem_drug("D");
                      break;
                    case 'E_drug': search_page_chem_drug("E");
                      break;
                    case 'F_drug': search_page_chem_drug("F");
                      break;
                    case 'G_drug': search_page_chem_drug("G");
                      break;
                    case 'H_drug': search_page_chem_drug("H");
                      break;
                    case 'I_drug': search_page_chem_drug("I");
                      break;
                    case 'J_drug': search_page_chem_drug("J");
                      break;
                    case 'K_drug': search_page_chem_drug("K");
                      break;
                    case 'L_drug': search_page_chem_drug("L");
                      break;
                    case 'M_drug': search_page_chem_drug("M");
                      break;
                    case 'N_drug': search_page_chem_drug("N");
                      break;
                    case 'O_drug': search_page_chem_drug("O");
                      break;
                    case 'P_drug': search_page_chem_drug("P");
                      break;
                    case 'Q_drug': search_page_chem_drug("Q");
                      break;
                    case 'R_drug': search_page_chem_drug("R");
                      break;
                    case 'S_drug': search_page_chem_drug("S");
                      break;
                    case 'T_drug': search_page_chem_drug("T");
                      break;
                    case 'U_drug': search_page_chem_drug("U");
                      break;
                    case 'V_drug': search_page_chem_drug("V");
                      break;
                    case 'W_drug': search_page_chem_drug("W");
                      break;
                    case 'X_drug': search_page_chem_drug("X");
                      break;
                    case 'Y_drug': search_page_chem_drug("Y");
                      break;
                    case 'Z_drug': search_page_chem_drug("Z");
                      break;

                      default:
                      page_chem();
                      break;

                  }
          ?>
       

            </table>





            

          </center>
          </div>


          <center>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <a href="show_equipment.php?page=1" aria-label="Previous">
                   <span aria-hidden="true">&laquo;</span>
                </a>
                    </li>
                    <?php 
                       for ($i=1; $i <= $total_page ; $i++) { 
                            if ($page-2>=2 and ($i>2 and $i<$page-2)) {
                            echo "<li><a href=''>...</a></li>";
                            $i=$page-2;
                          }
                          if ($page+5<=$total_page and ($i>=$page+3 and $i<=$total_page-2)) {
                            echo "<li><a href=''>...</a></li>";
                            $i = $total_page-1;
                          }
                              ?><li <?php if ($page == $i) {echo 'class="active"';} ?>>
                                <a href='show_chemical.php?page=<?=$i?>>'><?php echo $i."</a></li><li>";
                        } 


                    ?>
                   
                  <a href="show_equipment.php?page=$total_page" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
          </center>
          </div>

  </body>
</html>