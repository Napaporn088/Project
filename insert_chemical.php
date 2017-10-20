<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มรายการวัสดุ เครื่องแก้ว</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.minn.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="jquery-ui.css">
    <script src="external/jquery/jquery.js"></script>
    <script src="jquery-ui.js"></script>
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
        <li><a href="show_chemical.php">รายชื่อสารเคมี</a></li>
        <li><a href="show_equipment.php">รายชื่อวัสดุและเครื่องแก้ว</a></li>
        <li><a href="#">ตรวจสอบคำร้อง</a></li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><?php
              session_start();
              echo $_SESSION['name']
            
            ?></a></li>

        <li><a href="logout_test.php" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"> ออกจากระบบ</span></a></li>
        
      </ul>
      </div>
      </div>
      </div>
      </nav>
      </div>

        <center> <h2>เพิ่มรายการวัสดุ เครื่องแก้ว</h2></font><br><br>

        <div class="container" style="width: 80%">
        <form class="form-horuzontal" method="post" action="insert_chemicals.php">

        <div class="form-group col-sm-11" >
        <label>code : &nbsp;</label>
        <input type="text" name="code" size="30">
        </div><br>

        <div class="form-group col-sm-11">&emsp;&emsp;&nbsp;
        <label >ชื่อสารเคมี : &nbsp;</label>
        <input type="text" name="name" size="40">
        </div><br>

        <div class="form-group col-sm-11">&emsp;&emsp;&nbsp;
        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สูตรเคมี : &nbsp;</label>
        <input type="text" name="chemical_formula" size="40">
        </div><br>

        <div class="form-group col-sm-12">&nbsp;
        <label>ยี่ห้อ : &nbsp;</label>
        <input type="text" name="brand" size="20">&emsp;&emsp;&emsp;
        <label>เกรด : &nbsp;</label>
        <select name="grade_chemical">
        <option value ="1">AR</option>
        <option value ="2">Univar</option>
        </select>
        </div><br>

        <div class="form-group col-sm-12">
        <label>ขนาด : &nbsp;</label>
        <input type="text" name="size" size="15"> 
        <label>จำนวน : &nbsp;</label>
        <input type="text" name="amout" size="15">
        </div><br>

        <div class="form-group col-sm-12">
        <label> สถานะ : &nbsp;</label>
        <select name="storage_chemical">
        <option id="1">ตู้ปรสิต</option>
        <option id="2">ตู้เก็บสารเคมี</option>
        </select>&emsp;

        <label >วันที่ยืม: &nbsp;</label>
        <input type="date" name=" expiration_date" size="30">
        <script type="text/javascript"> //แก้ให้เป็น yy-mm-dd
            jQuery ("#jQueryUICalendar1").datepicker({dateFormat: 'yy-mm-dd'});
        </script>
 
        </div><br>

  
        <div class="form-group">
        &nbsp;&nbsp;<label > หมายเหตุ : &nbsp; </label> 
        <textarea name="comment" rows="2" cols="50"> </textarea>
        </div><br>

        <center>
        <div class="from-group">
        <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </form>  
    
        </div>

</body>
</html>