<!DOCTYPE html>
<html>
<head>
	<title>รายชื่อสารเคมี</title>
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
        <li class="active"><a href="index_authorities.php" class=" glyphicon glyphicon-home"> หน้าแรก<span style="font-size:16px;" ></span></a></li>

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
<br>
        <div class="main">
          <h2 class="page-header">รายการสารเคมี</h2>

          
          <div class="container">
            
          <center>
            <div class="input-group col-sm-5">
              <input type="text" class="form-control " placeholder="Search">
                <div class="input-group-btn">
                   <button type="submit" class="btn"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </center>
              

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

</body>
</html>