<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    
    
    <title>ระบบจองสารเคมี วัสดุและเครื่องแก้ว</title>

    <link href="../css/bootstrap.minn.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    

    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../jquery-ui.css">
    <script src="../external/jquery/jquery.js"></script>
    <script src="../jquery-ui.js"></script>

       <script>
    $( function() 
      {
        $( "#datepicker" ).datepicker({
          dateFormat: "dd-mm-yy" ,
          minDate:0,
        });
 
      } );
     </script>
    

    
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

    <!--<a class="active"> <a href="Form.php" target="_parent"><img src="image/Logo1.jpg" width="600" height="110"></a></a>-->
   
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
              echo $_SESSION['name'];
            
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

         

            <form action="Confirm.php" name="data" method="POST" >
          
           <center> ห้องปฎิบัติการ <input type="text" name="room" > คณะวิทยาศาสตร์การแพทย์ </center><br>
           
           <center><strong>ชื่อ-นามสกุล : </strong><?php echo $_SESSION['name']; ?> &emsp;&emsp; 
           <strong> รหัสนิสิต : </strong><?php echo $_SESSION['code']; ?> &emsp;&emsp; 
           <strong> เบอร์โทร : </strong><?php echo $_SESSION['telephone_num']; ?> &emsp;&emsp; 
           <strong> สาขาวิชา : </strong> <?php echo $_SESSION['major']; ?> &emsp;&emsp;  
           <strong>คณะ :</strong>วิทยาศาสตร์การแพทย์
           </center>
           
            
             <center>
             <?php 
                    if ($_SESSION['position']== "1") {
                       echo "
                       <input type='radio' name='id_position' id='id_position' value='1'  checked>อาจารย์ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='2'>เจ้าหน้าที่ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='3'>นิสิตปริญญาตรี &emsp;
                       <input type='radio' name='id_position' id='id_position' value='4'>นิสิตปริญญาโท &emsp;
                       <input type='radio' name='id_position' id='id_position' value='5'>นิสิตปริญญาเอก &emsp;
                       <input type='radio' name='id_position' id='id_position' value='6'>อื่นๆ &emsp;";
                    }else if ($_SESSION['position']== "2") {
                       echo "
                       <input type='radio' name='id_position' id='id_position' value='1'>อาจารย์ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='2'  checked>เจ้าหน้าที่ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='3'>นิสิตปริญญาตรี &emsp;
                       <input type='radio' name='id_position' id='id_position' value='4'>นิสิตปริญญาโท &emsp;
                       <input type='radio' name='id_position' id='id_position' value='5'>นิสิตปริญญาเอก &emsp;
                       <input type='radio' name='id_position' id='id_position' value='6'>อื่นๆ &emsp;";
                    }else if ($_SESSION['position']== "3") {
                       echo "
                       <input type='radio' name='id_position' id='id_position' value='1'>อาจารย์ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='2'>เจ้าหน้าที่ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='3'  checked>นิสิตปริญญาตรี &emsp;
                       <input type='radio' name='id_position' id='id_position' value='4'>นิสิตปริญญาโท &emsp;
                       <input type='radio' name='id_position' id='id_position' value='5'>นิสิตปริญญาเอก &emsp;
                       <input type='radio' name='id_position' id='id_position' value='6'>อื่นๆ &emsp;";
                    }else if ($_SESSION['position']== "4") {
                       echo "
                       <input type='radio' name='id_position' id='id_position' value='1'>อาจารย์ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='2'>เจ้าหน้าที่ &emsp;
                       <input type='radio' name='id_position' id='id_position' value='3'>นิสิตปริญญาตรี &emsp;
                       <input type='radio' name='id_position' id='id_position' value='4'  checked>นิสิตปริญญาโท &emsp;
                       <input type='radio' name='id_position' id='id_position' value='5'>นิสิตปริญญาเอก &emsp;
                       <input type='radio' name='id_position' id='id_position' value='6'>อื่นๆ &emsp;";
                    }
              ?>

              </script>
             

           </center>
           

           <center><ul>
          
                มีความประสงค์ขอเบิก/ยืม รายการวัสดุ สารเคมีต่อไปนี้จากห้องปฎิบัติการ เพื่อใช้ในงาน
            <input type="radio" name="pro" value="การทำโครงงาน" checked> การทำโครงงาน

            <input type="radio" name="pro" value="บทปฎิบัติการ เรื่อง "  > บทปฎิบัติการ เรื่อง <input type="text" name="txt" id="txt" size="10"> 

            <input type="radio" name="pro" value=" อื่นๆ  "  > อื่นๆ <input type="text" name="txt id= "txt" size="10"/>
             </ul>
           </center>
          <br>


    <center> 
    <!--<script language="javascript" src="js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $("#addRow").click(function(){
            $("#table_t").append($("#table_r").clone());
            
        });

          $("#removeRow").click(function(){
              if($("#table_t tr").size()>3){
                  $("#table_t tr:last").remove();
                        
              }else{
                  alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");
              }
          }); 
         
      });
    </script>-->
  
      <table style="width: 75%">
      <thead>
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
          </tr></thead>

            
          <tbody>
         


 <form action="Confirm.php" name="frm" method="POST" >  
  <?php 
      include("insert_equipment_database.php");
      for ($i=0; $i <10 ; $i++) {   
        echo "<tr>";
       echo  "<td>";
       echo $i+1;
       echo "</td>";
       echo "<td><input style='border: none'  type='text' name='list[]' id='list'  size='35' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='chem[]' id='chem' size='3' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='bran[]' id='bran' size='3' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='grande[]' id='grande' size='2' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='size[]' id='size' size='2' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='price[]' id='price' size='2' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='amount1[]'  size='5' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='amount2[]' size='5' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='sum[]' size='5' value=''></td>";
       echo "<td><input style='border: none'  type='text' name='comment[]' size='10' value=''></td>";
    
    echo "</tr>";
   }
    ?>

</form>
  </tbody>
  
  </table><br>

</table></tbody>

  </center>
  <div style="padding-left:150px;margin-left:150px;">
    <strong> วันที่ยืม : </strong><input type="text" name="datepicker" id="datepicker" ></div> <br>

    <?php  

      include "../Database.php";
      $sql = "SELECT * FROM adviser";
      $query = mysqli_query($conn,$sql);
      $i=1;
      while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $adviser_name[$i] = $result['name'];
        $i++;

      }
    ?>

    <div style="padding-left:123px;margin-left:123px;">
      <strong> อาจารย์ที่ปรึกษา : </strong>
        <select name="adviser_n">
            <?php
              for ($i=1; $i < 9; $i++) { 
                  echo "<option value='$i'>".$adviser_name[$i]."</option>";
                }  
            ?>
        </select>
    </div>
<br>

<script type="text/javascript">
       $( function() {
         var availableTags =<?php echo json_encode($data) ?>
        
        $( "#list" ).autocomplete({
                    source: availableTags

    });            
  });

      
       console.log("List :", list.value);
       
   </script>

<center>

         
 <div class="col-sm-offset-2 col-sm-8">
  <input type="submit" name="submit" value="ยืนยัน" class="btn btn-primary">
  </form>
       
</div>

      </center>

        </div><br><br>

        

        <footer class="footer"><hr>
      <div class="container">
        <p class="text-muted" align = "right">Guide_Little.</p>
      </div>
    </footer>

  </body>
</html>

