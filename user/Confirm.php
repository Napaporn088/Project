
<!DOCTYPE html>
<html lang="en">
 
  <head>
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
    <style >
        table,th,td{
          border: 1px solid black;
          border-collapse: collapse;
        }
          th,td
        {
           padding: 5px;
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
        </div>


        <div > 
           <center> <h4>แบบฟอร์มเบิก / ยืม สารเคมี วัสดุ เครื่องแก้ว</h4></center></div><br>

           <?php  
            $_SESSION['room'] = $_POST['room'];
           ?>

            <div><center> ห้องปฎิบัติการ <?php echo $_SESSION['room']; ?> คณะวิทยาศาสตร์การแพทย์ </center></div><br><br>


            <div>
           <center><strong>ชื่อ-นามสกุล : </strong><?php echo $_SESSION['name']; ?> &emsp;&emsp; 
           <strong> รหัสนิสิต : </strong><?php echo $_SESSION['code']; ?> &emsp;&emsp; 
           <strong> เบอร์โทร : </strong><?php echo $_SESSION['telephone_num']; ?> &emsp;&emsp; 
           <strong> สาขาวิชา : </strong> <?php echo $_SESSION['major']; ?> &emsp;&emsp;  
           <strong>คณะ :</strong>วิทยาศาสตร์การแพทย์
           </center></div>

           <div>
           <center>
           

             <?php 
              $in = $_POST['id_position'];
              require "../Database.php";
              $sql = "SELECT * FROM user_position WHERE id_position=$in ";
              $query = mysqli_query($conn,$sql);
              $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
              

              echo  $result['position_name'];?>
                &emsp;&emsp;  <b>มีความประสงค์ขอเบิก/ยืม รายการวัสดุ สารเคมีต่อไปนี้จากห้องปฎิบัติการ เพื่อใช้ในงาน : </b>

                <?php  
              $_SESSION['id_position'] = $result['position_name'];
              $_SESSION['pro'] = $_POST['pro'];
              $_SESSION['txt'] = $_POST['txt'];
              

            ?>
                <?php echo $_SESSION['pro']; ?> 
                <?php echo $_SESSION['txt']; ?>
           </center></div><br>

           <center> 
            <form action="insert_chemical_submit.php" name="frm" method="POST" >  
      <table style="width: 75%" >
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
          </tr><thead>


          <tbody>
          
    <?php 
        function from_item($cols,$count){
          $list = $_POST[$cols];
            if (empty($list)) {
              echo "empty";
            }else{
              $n = count($list);
              
            }
          return $list[$count];

        }
        
      /*for ($i=0; $i < 10; $i++) { 
        echo "<tr>";
          echo "<td>";
          echo $i+1;
          echo "</td> ";       
          echo "<td>".from_item("list",$i) ."</td>";       
          echo "<td>".from_item("chem",$i) ."</td>";       
          echo "<td>".from_item("bran",$i) ."</td>";       
          echo "<td>".from_item("grande",$i) ."</td>";       
          echo "<td>".from_item("size",$i) ."</td>";       
          echo "<td>".from_item("price",$i) ."</td>";       
          echo "<td>".from_item("amount1",$i) ."</td>";       
          echo "<td>".from_item("amount2",$i) ."</td>";       
          echo "<td>".from_item("sum",$i) ."</td>";       
          echo "<td>".from_item("comment",$i) ."</td>";
        echo "</tr>";
      

    }*/?>
     <form action="insert_chemical_submit.php" name="frm" method="POST" >  
  <?php 
      
      $count = 0;
      for ($i=0; $i <10 ; $i++) {   
        echo "<tr>";
       echo  "<td>";
       echo $i+1;
       echo "</td>";
 ?>

        <td><input style='border: none'  type='text' name='list[]' id='list'  size='35' value="<?php echo from_item('list',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='chem[]' id='chem' size='3' value="<?php echo from_item('chem',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='bran[]' id='bran' size='3' value="<?php echo from_item('bran',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='grande[]' id='grande' size='2' value="<?php echo from_item('grande',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='size[]' id='size' size='2' value="<?php echo from_item('size',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='price[]' id='price' size='2' value="<?php echo from_item('price',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='amount1[]'  size='5' value="<?php echo from_item('amount1',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='amount2[]' size='5' value="<?php echo from_item('amount2',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='sum[]' size='5' value="<?php echo from_item('sum',$count)?>" readonly></td>
        <td><input style='border: none'  type='text' name='comment[]' size='10' value="<?php echo from_item('comment',$count)?>" readonly></td>
       <?php
    
    echo "</tr>";
    $count++;
   }
    ?>

</form>
  
  </table></tbody><br> 

  <?php 
  $_SESSION['datedb'] = $_POST['datepicker'];
  
  $_SESSION['date_re'] =  date( "d-m-Y", strtotime("+7 day", strtotime($_SESSION['datedb'])));
   ?>

  <strong> วันที่ยืม : </strong> <?php echo $_POST['datepicker']; ?>&emsp;&emsp;
  <strong> วันที่คืน : </strong> <?php echo $_SESSION['date_re']; ?> <br>
   <?php  

      include "../Database.php";
      $sql = "SELECT * FROM adviser";
      $query = mysqli_query($conn,$sql);
      $i=1;
      while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $_SESSION['name_adviser'] = $_POST['adviser_n'];

        if ($i == $_POST['adviser_n']) {
         $adviser_name = $result['name'];
        }
        $i++;
      }
      
    ?>
  <strong> อาจารย์ที่ปรึกษา : </strong> <?php echo $adviser_name; ?><br><br>
<?php echo $_POST['adviser_n']; ?>


  <div class="container">
    <input type=button class="btn btn-warning btn-md" onClick="window.history.back()" value="แก้ไข">&emsp;&emsp;

    <input type="submit" name="submit" value="ยืนยัน" class="btn btn-primary btn-md" >
    
  </div>
</form>





            
            <footer class="footer"><hr>
      <div class="container">
        <p class="text-muted" align = "right">Guide_Little.</p>
      </div>
    </footer>

  </body>
</html>