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
<br>
  
  <style type="text/css">
    
    .table_equipment th{
      color: #222;
      padding: 10px 8px;
      background: #B4F9D1;
      border-collapse: collapse;
      border-bottom: 2px solid #ccc;
      border: 1px solid #B0B0B0;
      text-align:left;

    }
    .table_equipment td{
      border-bottom: 1px solid #ccc;
      color: #666;
      background: #fff;
      padding: 10px;
      border: 1px solid #B0B0B0;
      text-align: left;
    }
    .table_equipment tbody tr:hover td{
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
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 

    </div><center>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" class=" glyphicon glyphicon-home"> หน้าแรก<span style="font-size:16px;" ></span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">อุปกรณ์ใช้แล้วคืน<span class="caret"></span><span style="font-size:16px;" ></span></a>
		          
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_equipment.php?page=A"><center>หมวด A</center></a></li>
            <li><a href="show_equipment.php?page=B"><center>หมวด B</center></a></li>
            <li><a href="show_equipment.php?page=C"><center>หมวด C</center></a></li>
            <li><a href="show_equipment.php?page=D"><center>หมวด D</center></a></li>
            <li><a href="show_equipment.php?page=E"><center>หมวด E</center></a></li>
            <li><a href="show_equipment.php?page=F"><center>หมวด F</center></a></li>
            <li><a href="show_equipment.php?page=G"><center>หมวด G</center></a></li>
            <li><a href="show_equipment.php?page=H"><center>หมวด H</center></a></li>
            <li><a href="show_equipment.php?page=I"><center>หมวด I</center></a></li>
            <li><a href="show_equipment.php?page=J"><center>หมวด J</center></a></li>
            <li><a href="show_equipment.php?page=K"><center>หมวด K</center></a></li>
            <li><a href="show_equipment.php?page=L"><center>หมวด L</center></a></li>
            <li><a href="show_equipment.php?page=M"><center>หมวด M</center></a></li>
            <li><a href="show_equipment.php?page=N"><center>หมวด N</center></a></li>
            <li><a href="show_equipment.php?page=O"><center>หมวด O</center></a></li>
            <li><a href="show_equipment.php?page=P"><center>หมวด P</center></a></li>
            <li><a href="show_equipment.php?page=Q"><center>หมวด Q</center></a></li>
            <li><a href="show_equipment.php?page=R"><center>หมวด R</center></a></li>
            <li><a href="show_equipment.php?page=S"><center>หมวด S</center></a></li>
            <li><a href="show_equipment.php?page=T"><center>หมวด T</center></a></li>
            <li><a href="show_equipment.php?page=U"><center>หมวด U</center></a></li>
            <li><a href="show_equipment.php?page=V"><center>หมวด V</center></a></li>
            <li><a href="show_equipment.php?page=W"><center>หมวด W</center></a></li>
            <li><a href="show_equipment.php?page=X"><center>หมวด X</center></a></li>
            <li><a href="show_equipment.php?page=Y"><center>หมวด Y</center></a></li>
            <li><a href="show_equipment.php?page=Z"><center>หมวด Z</center></a></li>

          </ul>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown">อุปกรณ์ใช้แล้วทิ้ง<span class="caret"></span><span style="font-size:16px;" ></span></a>
              
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="show_equipment.php?page=A_none"><center>หมวด A</center></a></li>
            <li><a href="show_equipment.php?page=B_none"><center>หมวด B</center></a></li>
            <li><a href="show_equipment.php?page=C_none"><center>หมวด C</center></a></li>
            <li><a href="show_equipment.php?page=D_none"><center>หมวด D</center></a></li>
            <li><a href="show_equipment.php?page=E_none"><center>หมวด E</center></a></li>
            <li><a href="show_equipment.php?page=F_none"><center>หมวด F</center></a></li>
            <li><a href="show_equipment.php?page=G_none"><center>หมวด G</center></a></li>
            <li><a href="show_equipment.php?page=H_none"><center>หมวด H</center></a></li>
            <li><a href="show_equipment.php?page=I_none"><center>หมวด I</center></a></li>
            <li><a href="show_equipment.php?page=J_none"><center>หมวด J</center></a></li>
            <li><a href="show_equipment.php?page=K_none"><center>หมวด K</center></a></li>
            <li><a href="show_equipment.php?page=L_none"><center>หมวด L</center></a></li>
            <li><a href="show_equipment.php?page=M_none"><center>หมวด M</center></a></li>
            <li><a href="show_equipment.php?page=N_none"><center>หมวด N</center></a></li>
            <li><a href="show_equipment.php?page=O_none"><center>หมวด O</center></a></li>
            <li><a href="show_equipment.php?page=P_none"><center>หมวด P</center></a></li>
            <li><a href="show_equipment.php?page=Q_none"><center>หมวด Q</center></a></li>
            <li><a href="show_equipment.php?page=R_none"><center>หมวด R</center></a></li>
            <li><a href="show_equipment.php?page=S_none"><center>หมวด S</center></a></li>
            <li><a href="show_equipment.php?page=T_none"><center>หมวด T</center></a></li>
            <li><a href="show_equipment.php?page=U_none"><center>หมวด U</center></a></li>
            <li><a href="show_equipment.php?page=V_none"><center>หมวด V</center></a></li>
            <li><a href="show_equipment.php?page=W_none"><center>หมวด W</center></a></li>
            <li><a href="show_equipment.php?page=X_none"><center>หมวด X</center></a></li>
            <li><a href="show_equipment.php?page=Y_none"><center>หมวด Y</center></a></li>
            <li><a href="show_equipment.php?page=Z_none"><center>หมวด Z</center></a></li>

          </ul>

    </div>
  </div>
  </center>
</nav>


<div class="main">
          <h2 class="page-header">รายการวัสดุ เครื่องแก้ว</h2>

       
        <div class="container">
            
          <center>
            
            <form  method="post" action="../form_equipment.php"> 
            <div class="input-group col-md-3">
                <input type="text" class="form-control" placeholder="Search" name="txt_keyword" id="txtkeyword" value="">
            <div class="input-group-btn ">
                <input class="btn btn-default" type="submit" value="ค้นหา">
                

            </div>
            </div>
            </form>
            
            </center></div><br><br>
              
          
          <div class="container" >
            <center>
            <table class="table_equipment" style="width: 70%"">
              <thead>
                <tr>
                  <th style="width: 5%"><center>ลำดับ</center></th>
                  <th style="width: 25%"><center>รายชื่อภาษาอังกฤษ</center></th>
                  <th style="width: 25%"><center>รายชื่อภาษาไทย</center></th>
                  <th style="width: 10%"><center>ยี่ห้อ</center></th>
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
                    $total = "SELECT * FROM equipment ";
                    
                    $query = mysqli_query($conn,$total);
                    
                     
                      $count = 0;
                      while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                          $Name[$count] = $result['name_eng'];
                          $Name_th[$count] = $result['name_th'];
                          $Brand[$count] = $result['brand'];
                          $Size[$count] = $result['size'];
                          $Price[$count] = $result['price/unit'];
                          $Amout[$count] = $result['remaining(total)'];

                          $count++; 
                        }

                    $total_eq_scr = "SELECT * FROM equipment_scrounge";
                    $query = mysqli_query($conn,$total_eq_scr);
                    $count1 = 0;
                    while ($result = mysqli_fetch_array($query)) {
                      $NAME[$count1] = $result['name_eng'];
                      $name_th[$count1] = $result['name_th'];
                      $brand[$count1] = $result['brand'];
                      $size[$count1] = $result['size'];
                      $price[$count1] = $result['price/unit'];
                      $AMOUT[$count1] = $result['remaining(total)'];

                      $count1++;
                    }
                    echo $count."xxx<br>xxx".$count1."<br>";
                    $count_total = $count+$count1;
                    echo $count_total;
                  
                   ?>
                   <?php 
                   echo "count".$count;
                   $total_page = ceil($count_total/$row);
                   echo $total_page ;
                   $temp_page =  $count/20;
                   echo ceil($temp_page);

              function page_default(){
                include "../Database.php";
                $row = 20;
                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                }else {
                  $page = 1;
                }
                
                $sum = ($page-1)*$row;
                $total = "SELECT * FROM equipment ";
                
                $query = mysqli_query($conn,$total);
                
                 
                  $count = 0;
                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                      $Name[$count] = $result['name_eng'];
                      $Name_th[$count] = $result['name_th'];
                      $Brand[$count] = $result['brand'];
                      $Size[$count] = $result['size'];
                      $Price[$count] = $result['price/unit'];
                      $Amout[$count] = $result['remaining(total)'];

                      $count++; 
                    }

                $total_eq_scr = "SELECT * FROM equipment_scrounge";
                $query = mysqli_query($conn,$total_eq_scr);
                $count1 = 0;
                while ($result = mysqli_fetch_array($query)) {
                  $NAME[$count1] = $result['name_eng'];
                  $name_th[$count1] = $result['name_th'];
                  $brand[$count1] = $result['brand'];
                  $size[$count1] = $result['size'];
                  $price[$count1] = $result['price/unit'];
                  $AMOUT[$count1] = $result['remaining(total)'];

                  $count1++;
                }
                echo $count."xxx<br>xxx".$count1."<br>";
                $count_total = $count+$count1;
                echo $count_total;
              
               ?>
               <?php 
               echo "count".$count;
               $total_page = ceil($count_total/$row);
               echo $total_page ;
               $temp_page =  $count/20;
               echo ceil($temp_page);
               ?>

              

             <?php 
              $check_count = 0;
              if (($_SESSION['txt_key'] == "")) {

             
                   
                if ($page <=$temp_page) {
                  include "../Database.php";
                  $sql = "SELECT * FROM equipment Limit {$sum},{$row }"  ;
                  $query = mysqli_query($conn,$sql);
                  $i=($page*$row)-$row;
                  $c = 0;  
                  while ($result = mysqli_fetch_array($query)) {
                  $NAME[$c] = $result['name_eng'];
                  $name_th[$c] = $result['name_th'];
                  $brand[$c] = $result['brand'];
                  $size[$c] = $result['size'];
                  $price[$c] = $result['price/unit'];
                  $AMOUT[$c] = $result['remaining(total)'];


                      $i++;
                      $c++;
                    };
                    echo "xxxxxxxzxxxxzzz<br>$check_count<br>";
                    
                    
                  echo $count."xxx<br>xxx".$count1."<br>";
                   for ($j=$i-20; $j < $i; $j++) { 
                       ?>
                <tbody>
                  <tr>
                    <td><center><?php echo $j+1; ?></center></td>
                    <td><?php echo $Name[$j]; ?></td>
                    <td><?php echo $name_th[$j]; ?></td>
                    <td><center><?php echo $brand[$j]; ?></center></td>
                    <td><center><?php echo $size[$j]; ?></center></td>
                    <td><center><?php echo $price[$j]; ?></center></td>
                    <td><center><?php echo $Amout[$j]; ?></center></td>
                  </tr>
                 
                </tbody>
                <?php 
                }
                }else if($page>$temp_page){
                  echo "stringSSSSSSSSSSSSS";
                    include "../Database.php";
                            $sql1 = "SELECT * FROM equipment_scrounge Limit {$sum},{$row }"  ;
                        echo "<br>".$sql1 ;
                        $query1 = mysqli_query($conn,$sql1);
                        $a=($page*$row)-$row;
                        echo "<br>".$count;
                        $c = 0;
                        while ($result = mysqli_fetch_array($query1)) {
                            $NAME1[$c] = $result['name_eng'];
                            $name_th1[$c] = $result['name_th'];
                            $brand1[$c] = $result['brand'];
                            $size1[$c] = $result['size'];
                            $price1[$c] = $result['price/unit'];
                            $AMOUT1[$c] = $result['remaining(total)'];
                            $a++;
                            $c++;
                            ?>
                      <tbody>
                        <tr>
                          
                          <td><center><?php echo $a; ?></center></td>
                          <td><?php echo $result['name_eng']; ?></td>
                          <td><?php echo $result['name_th']; ?></td>
                          <td><center><?php echo $result['brand']; ?></center></td>
                          <td><center><?php echo $result['size']; ?></center></td>
                          <td><center><?php echo $result['price/unit']; ?></center></td>
                          <td><center><?php echo $result['remaining(total)']; ?></center></td>
                         
                        </tr>
                       
                      </tbody>
                      <?php 
                        
                        };

                        
                }
                    $conn->close();


              }
              else if(($_SESSION['txt_key'] != "")){
                  require "../Database.php";
                  $txt_keyword =  $_SESSION['txt_key'];
                  $sql = "SELECT * FROM equipment WHERE (name_eng LIKE '".$txt_keyword."%' ) ";
                 
                  $query = mysqli_query($conn,$sql);
                  $i=1;
                  $c=($page*$row)-$row;
                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                ?>

                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result['name_eng']; ?></td>
                    <td><?php echo $result['name_th']; ?></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['remaining(total)']; ?></center></td>
                         
                  </tr>
                 
                </tbody>
                <?php 
                $c++;
                    };

                  $txt_keyword =  $_SESSION['txt_key'];
                  $sql_equ_s = "SELECT * FROM equipment_scrounge WHERE (name_eng LIKE '".$txt_keyword."%' ) ";
                  $query_equ_s = mysqli_query($conn,$sql_equ_s);
                 

                  while ($result_equ_s = mysqli_fetch_array($query_equ_s,MYSQLI_ASSOC)) {
                ?>

                <tbody>
                  <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo $result_equ_s['name_eng']; ?></td>
                    <td><?php echo $result_equ_s['name_th']; ?></td>
                    <td><center><?php echo $result_equ_s['brand']; ?></center></td>
                    <td><center><?php echo $result_equ_s['size']; ?></center></td>
                    <td><center><?php echo $result_equ_s['price/unit']; ?></center></td>
                    <td><center><?php echo $result_equ_s['remaining(total)']; ?></center></td>
                         
                  </tr>
                 
                </tbody>
                <?php 

                    };
                    $conn->close();
                  }
                }
              ?>

              

              <?php
              function search_page_equ($PAGE){
                $type = "Type".$PAGE;
                include "../Database.php";
                  $sql = "SELECT * FROM equipment WHERE id_equipment LIKE '%$type%' ORDER BY id_equipment DESC ";
                  $query = mysqli_query($conn,$sql);
                  $e=1;
                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                ?>

                <tbody>
                  <tr>
                    <td><center><?php echo $e++; ?></center></td>
                    <td><?php echo $result['name_eng']; ?></td>
                    <td><?php echo $result['name_th']; ?></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['remaining(total)']; ?></center></td> 
                  </tr>
                 
                </tbody>

               <?php 

                    };
                    $conn->close(); 
              }
                  
                  function search_page_equ_none($PAGE){
                $type = "Consumables_".$PAGE;
                echo "$type";
                include "../Database.php";
                  $sql = "SELECT * FROM equipment_scrounge WHERE id_equipement LIKE '%$type%' ORDER BY id_equipement DESC ";
                  $query = mysqli_query($conn,$sql);
                  $e=1;
                  while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                ?>

                <tbody>
                  <tr>
                    <td><center><?php echo $e++; ?></center></td>
                    <td><?php echo $result['name_eng']; ?></td>
                    <td><?php echo $result['name_th']; ?></td>
                    <td><center><?php echo $result['brand']; ?></center></td>
                    <td><center><?php echo $result['size']; ?></center></td>
                    <td><center><?php echo $result['price/unit']; ?></center></td>
                    <td><center><?php echo $result['remaining(total)']; ?></center></td> 
                  </tr>
                 
                </tbody>

               <?php 

                    };
                    $conn->close(); 
              }
                  
              ?><?php
                  switch ($_GET['page']) {
                    case 'A': search_page_equ($_GET['page']);
                      break;
                    case 'B': search_page_equ($_GET['page']);
                      break;
                    case 'C': search_page_equ($_GET['page']);
                      break;
                    case 'D': search_page_equ($_GET['page']);
                      break;
                    case 'E': search_page_equ($_GET['page']);
                      break;
                    case 'F': search_page_equ($_GET['page']);
                      break;
                    case 'G': search_page_equ($_GET['page']);
                      break;
                    case 'H': search_page_equ($_GET['page']);
                      break;
                    case 'I': search_page_equ($_GET['page']);
                      break;
                    case 'J': search_page_equ($_GET['page']);
                      break;
                    case 'K': search_page_equ($_GET['page']);
                      break;
                    case 'L': search_page_equ($_GET['page']);
                      break;
                    case 'M': search_page_equ($_GET['page']);
                      break;
                    case 'N': search_page_equ($_GET['page']);
                      break;
                    case 'O': search_page_equ($_GET['page']);
                      break;
                    case 'P': search_page_equ($_GET['page']);
                      break;
                    case 'Q': search_page_equ($_GET['page']);
                      break;
                    case 'R': search_page_equ($_GET['page']);
                      break;
                    case 'S': search_page_equ($_GET['page']);
                      break;
                    case 'T': search_page_equ($_GET['page']);
                      break;
                    case 'U': search_page_equ($_GET['page']);
                      break;
                    case 'V': search_page_equ($_GET['page']);
                      break;
                    case 'W': search_page_equ($_GET['page']);
                      break;
                    case 'X': search_page_equ($_GET['page']);
                      break;
                    case 'Y': search_page_equ($_GET['page']);
                      break;
                    case 'Z': search_page_equ($_GET['page']);
                      break;
                    case 'A_none': search_page_equ_none("A");
                      break;
                    case 'B_none': search_page_equ_none("B");
                      break;
                    case 'C_none': search_page_equ_none("C");
                      break;
                    case 'D_none': search_page_equ_none("D");
                      break;
                    case 'E_none': search_page_equ_none("E");
                      break;
                    case 'F_none': search_page_equ_none("F");
                      break;
                    case 'G_none': search_page_equ_none("G");
                      break;
                    case 'H_none': search_page_equ_none("H");
                      break;
                    case 'I_none': search_page_equ_none("I");
                      break;
                    case 'J_none': search_page_equ_none("J");
                      break;
                    case 'K_none': search_page_equ_none("K");
                      break;
                    case 'L_none': search_page_equ_none("L");
                      break;
                    case 'M_none': search_page_equ_none("M");
                      break;
                    case 'N_none': search_page_equ_none("N");
                      break;
                    case 'O_none': search_page_equ_none("O");
                      break;
                    case 'P_none': search_page_equ_none("P");
                      break;
                    case 'Q_none': search_page_equ_none("Q");
                      break;
                    case 'R_none': search_page_equ_none("R");
                      break;
                    case 'S_none': search_page_equ_none("S");
                      break;
                    case 'T_none': search_page_equ_none("T");
                      break;
                    case 'U_none': search_page_equ_none("U");
                      break;
                    case 'V_none': search_page_equ_none("V");
                      break;
                    case 'W_none': search_page_equ_none("W");
                      break;
                    case 'X_none': search_page_equ_none("X");
                      break;
                    case 'Y_none': search_page_equ_none("Y");
                      break;
                    case 'Z_none': search_page_equ_none("Z");
                      break;


                    
                    default:
                      page_default();
                      break;

                  }
          ?>

            </table></center>


          </div>

          <center>
          <div class="pagination-wrap">
            
              <ul class="pagination ">
              <li >
                <a href="show_equipment.php?page=1" aria-label="Previous">
                   <span aria-hidden="true">&laquo;</span>
                </a>
                    </li>
                    <?php
                       for ($i=1; $i <= $total_page ; $i++) { 
                            //$templeft = $total_page-47;
                          if ($page-2>=2 and ($i>2 and $i<$page-2)) {
                            echo "<li><a href=''>...</a></li>";
                            $i=$page-2;
                          }
                          if ($page+5<=$total_page and ($i>=$page+3 and $i<=$total_page-2)) {
                            echo "<li><a href=''>...</a></li>";
                            $i = $total_page-1;
                          }


                             ?><li <?php if ($page == $i) {echo 'class="active"';} ?>>
                              <a href='show_equipment.php?page=<?=$i?>'><?php echo $i."</a></li><li>";
                        } 
                      
                    ?>
                <a href="show_equipment.php?page=<? echo $total_page;?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div>
          </center>

          

        </div>

        
</body>
</html>