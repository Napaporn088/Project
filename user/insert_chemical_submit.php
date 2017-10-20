<!-- <?php 
/*session_start();
 function insert_sorunge($ch,$a){
                    include 'Database.php';
                    $sql_sorunge = "INSERT INTO scrounge (  id_scrounge,id_user,id_chemicals,amout,scrounge_date,scientist) VALUES ('','$_SESSION[code]','$ch','$a','','')";
                    $query = mysqli_query($conn,$sql_sorunge);
                    if (!$query) {
                        echo "ERROR";
                    }else{
                        echo "OK";
                    }


                   }
				   
                   for ($i=0; $i <  $_SESSION['count_type']; $i++) { 
                  		$check = $_SESSION["check_type".$i];
                  		$am = $_SESSION["amout1".$i];
                  		echo "check_ss".$check."<br>" ;
                  		echo "check_a1".$am."<br>";
                  		insert_sorunge($check,$am);
                   }
  function insert_borrow($cc,$b){
  		include 'Database.php';
  		$sql_borrow = "INSERT INTO borrow (id_borrow,id_user,id_equipment,amout,borrow_date,return_day,sdentist,Status) VALUES ('','$_SESSION[code]','$cc','$b','','','','No)";
  		$query = mysqli_query($conn,$sql_borrow);
  		if (!$query) {
  			echo "ERROR";
  		}else{
  			echo "OK";
  		}
  	}
  	echo $_SESSION["count_ID"];
  	for ($j=0; $j < $_SESSION["count_ID"] ; $j++) { 
  		$che = $_SESSION["check_ID$j"];
  		$bb = $_SESSION["amout2$j"];
  		echo "check_bb".$che."<br>" ;
      echo "check_a2".$bb."<br>";
  		insert_borrow($che,$bb);
  	

  }
  function insert_borrow_sorunge($rr,$c){
    include 'Database.php';
    $sql_borrow_sorunge = "INSERT INTO borrow ( id_borrow,id_user,  id_equipment, amout,  borrow_date,return_day,sdentist,Status) VALUES ('','$_SESSION[code]','$rr','$c','','','','Yes')";
    $query =mysqli_query($conn,$sql_borrow_sorunge);
    if (!$query) {
      echo "ERROR";
    }else{
      echo "OK";
    }
  }
  echo $_SESSION['count_size_price'];
  for ($k=0; $k <  $_SESSION['count_size_price']; $k++) { 
   $rrc =  $_SESSION["count_size_price$k"];
   $bb = $_SESSION["amout2$k"];
   $si =  $_SESSION['size$k'];
   $pri = $_SESSION['price$k'];

  }*/

 ?> -->
 <?php
 session_start();

  function check_list_of_table($list){
    include '../Database.php';
    $sql_check_chemical = "SELECT * FROM chemicals";
    $query_chem = mysqli_query($conn,$sql_check_chemical);

    $sql_check_equipment = "SELECT * FROM equipment";
    $query_equi = mysqli_query($conn,$sql_check_equipment);

    $sql_check_equipment_scrounge = "SELECT * FROM equipment_scrounge";
    $query_equi_scr = mysqli_query($conn,$sql_check_equipment_scrounge);  

    $temp_chem = "no";
    $temp_equi = "no";
    $temp_equi_scr = "no";
    $list_chem = "---";
    $list_equi = "---";
    $list_equi_scr = "---";

    while ($result = mysqli_fetch_row($query_chem )) {
      if (trim($list) == trim($result[2])) {
        $temp_chem = "yes";
        $list_chem = $result[2];
      }
    }
    while ($result = mysqli_fetch_row($query_equi)) {
      if (trim($list) == trim($result[1])) {
        $temp_equi = "yes";
        $list_equi = $result[1];
      }
    }
    while ($result = mysqli_fetch_row($query_equi_scr )) {
      if (trim($list) == trim($result[1])) {
        $temp_equi_scr = "yes";
        $list_equi_scr = $result[1];
      }
    }

    echo "chem :" ;
    echo $temp_chem." : ";
    echo  $list_chem."<br>";

    echo "equi : "  ;
    echo  $temp_equi." : ";
    echo $list_equi."<br>";

    echo "equi_ss : " ;
    echo  $temp_equi_scr." : ";
    echo   $list_equi_scr."<br>";
    if ($temp_chem != "no") {
      return $temp_chem."chemicals";

    }elseif ($temp_equi != "no") {
      return $temp_equi."equipment";

    }elseif ($temp_equi_scr != "no") {
      return $temp_equi_scr."equipment_scrounge";

    }else{
      return "ERROR";
    }

  }



  function check_chemical($list,$chem,$bran,$grande,$size,$price,$amount1){

    include '../Database.php';
    $sql_check_chemical = "SELECT * FROM chemicals";
    $query = mysqli_query($conn,$sql_check_chemical);
    while ($result = mysqli_fetch_row($query)) {
      if ((trim($list) == trim($result[2]))) {
          $List = $result[2];

         if (trim($chem) == trim($result[3])) {
            $Chem = $result[3];
            
            if (trim($bran) == trim($result[4])) {
              $Bran = $result[4];
              
              if (trim($grande) == trim($result[5])) {
                $Grande = $result[5];
               
                if (trim($size) == trim($result[6])) {
                  $Size = $result[6];
                  
                  if (trim($price) == trim($result[7])) {
                    $Price = $result[7];
                     echo "if-chemic<br>";
                     $_SESSION["listOK"] = trim($result[2]);
                     $_SESSION["chemOK"] = trim($result[3]);
                     $_SESSION["branOK"]= trim($result[4]);
                     $_SESSION["grandeOK"] = trim($result[5]);
                     $_SESSION["sizeOK"] = trim($result[6]);
                     $_SESSION["priceOK"] = trim($result[7]);
                     $_SESSION["typeOK"] = trim($result[0]);
                      return "OKif";

                  }
                }
              }
            }
          }
      }
       
    }
  }

    // อุปกรณ์ใช้แล้วคืน
    function check_equipment($list,$bran,$size,$price,$amount2){
      include '../Database.php';
      $sql_check_equipment = "SELECT * FROM equipment";
      $query = mysqli_query($conn,$sql_check_equipment);
      while ( $result = mysqli_fetch_row($query)) {
       if ((trim($list) == trim($result[1]))) {
          $List = $result[1];
          if ((trim($bran)) == trim($result[3])) {
          $Bran = $result[3];
            if ((trim($size)) == trim($result[4])) {
            $Size = $result[4];
             if ((trim($price)) == trim($result[5])) {
             $Price = $result[5];
             echo "Price".$Price."<br>";

              $_SESSION["listOK"] = $result[1];
              $_SESSION["branOK"]= $result[3];
              $_SESSION["sizeOK"] = $result[4];
              $_SESSION["priceOK"] = $result[5];
              $_SESSION["id_equipment"] = $result[0];
                      return "OKif";
             
            }
          }
        }
       }   
      }
    }
     //  อุปกรณ์ใช้แล้วทิ้ง
      function check_equipment_scrounge($list,$bran,$size,$price,$amount1){
       include '../Database.php';
       $sql_check_equipment_scrounge = "SELECT * FROM equipment_scrounge";
       $query = mysqli_query($conn,$sql_check_equipment_scrounge);
       while ( $result = mysqli_fetch_row($query)) {
        if ((trim($list) == trim($result[1]))) {
           $List = $result[1];
           if ((trim($bran)) == trim($result[3])) {
           $Bran = $result[3];
             if ((trim($size)) == trim($result[4])) {
             $Size = $result[4];
              if ((trim($price)) == trim($result[5])) {
              $Price = $result[5];
              echo $result[0]."<br>";
              echo $result[1]."<br>";
              echo $result[2]."<br>";
              echo $result[3]."<br>";
              echo $result[4]."<br>";
              echo $result[5]."<br>";

               $_SESSION["listOK"] = trim($result[1]);
               $_SESSION["branOK"]= trim($result[3]);
               $_SESSION["sizeOK"] = trim($result[4]);
               $_SESSION["priceOK"] = trim($result[5]);
               $_SESSION["id_equipment_scr"] = trim($result[0]);
                      return "OKif";
             }
           }
         }
        }   
       }
     }


    /*echo $i.$listOK[$i] ."<br>"; 
    echo $i.$chemOK[$i] ."<br>";  
    echo $i.$branOK[$i]  ."<br>";  
    echo $i.$grandeOK[$i] ."<br>";  
    echo $i.$sizeOK[$i] ."<br>";  
    echo $i.$priceOK[$i] ."<br>";  
    echo $i.$typeOK[$i] ."<br>";
*/

   
   function from_item($cols,$count){
          $list = $_POST[$cols];
            if (empty($list)) {
              echo "empty";
            }else{
              $n = count($list);
            }
          return $list[$count];
        }
        $count = 0;
        for ($i=0; $i < 10; $i++) { 
          $L = $_POST["list"];
          if(!empty(trim($L[$i]))){
            $count++;
          }
        }
    //สารเคมี ใช้แล้วทิ้ง


    function insert_sorunge($a){
                    $datebdd = date("Y-m-d",strtotime($_SESSION['datedb']));
                    $date_save = date("Y-m-d H:i:0");
                    include '../Database.php';
                    $sql_sorunge = "INSERT INTO scrounge (  id_scrounge,id_user,id_chemicals,amout,scrounge_date,date_save,scientist) VALUES ('','$_SESSION[code]','$_SESSION[typeOK]','$a','$datebdd','$date_save','')";
                    $query = mysqli_query($conn,$sql_sorunge);
                    if (!$query) {
                        echo "ERROR<br>";
                    }else{
                        echo "OKsorunge<br>";
                    }
                    $conn->close();

                   }
       

        //เพิ่มลงใน borrow ใช้แล้วคืน
       function insert_equipment($c){
        $datebdd = date("Y-m-d",strtotime($_SESSION['datedb']));
        $date_re = date("Y-m-d",strtotime($_SESSION['date_re']));
        $date_save = date("Y-m-d H:i:0");
        include '../Database.php';
        $sql_borrow_equipment = "INSERT INTO borrow ( id_borrow,id_user,id_equipment,amout, borrow_date,return_day,date_save,sdentist,Status) VALUES ('','$_SESSION[code]','$_SESSION[id_equipment]','$c','$datebdd','$date_re','$date_save','','restore')";
       $query = mysqli_query($conn,$sql_borrow_equipment);
       if (!$query) {
                        echo "ERROR<br>";
                    }else{
                        echo "OKequipment<br>";
                    }
                    $conn->close();

                   }





        //เพิ่มลงใน borrow ใช้แล้วทิ้ง
        function insert_equipment_sorunge($d){
        $datebdd = date("Y-m-d",strtotime($_SESSION['datedb']));
        $date_re = date("Y-m-d",strtotime($_SESSION['date_re']));
        $date_save = date("Y-m-d H:i:0");
        include '../Database.php';
        $sql_borrow_equipment_sorunge = "INSERT INTO borrow ( id_borrow,id_user,id_equipment,amout, borrow_date,return_day,date_save,sdentist,Status) VALUES ('','$_SESSION[code]','$_SESSION[id_equipment_scr]','$d','$datebdd','$date_re','$date_save','','nonerestore')";
       $query = mysqli_query($conn,$sql_borrow_equipment_sorunge);
       if (!$query) {
                        echo "ERROR<br>";
                    }else{
                        echo "OKequipment_sorunge<br>";
                    }
                    $conn->close();

        }

        function insert_uesr(){
          include '../Database.php';
          $date_save = date("Y-m-d H:i:0");
          $sql_user = "INSERT INTO user (id_user,code,room,name,major,telephone_num,type,position,demand,demand_text,date_save) VALUES ('','$_SESSION[code]','$_SESSION[room]','$_SESSION[name]','$_SESSION[major]','$_SESSION[telephone_num]','$_SESSION[tepy]','$_SESSION[position]','$_SESSION[pro]','$_SESSION[txt]','$date_save')";
          $query = mysqli_query($conn,$sql_user);
          
          if ($query) {
                        echo "ERROR user<br>";
                    }else{
                        echo "OK user<br>";
                    }
                    $conn->close();
        }

     

      function insert_status(){
        $date_save = date("Y-m-d H:i:0");
        include '../Database.php';
        $sql_check = "INSERT INTO check_status_approvers (id_check_status,date_save,teacher,  Laboratory_staff,Description,adviser) VALUES ('','$date_save','no','no','$_SESSION[code]','$_SESSION[name_adviser]')";
        $query = mysqli_query($conn,$sql_check);
        if (!$query) {
                        echo "ERROR<br>";
                    }else{
                        echo "OK_status<br>";
                    }
                    $conn->close();

      }


        
       for($i = 0;$i<$count;$i++){
          $check_table = check_list_of_table(from_item("list",$i));
          if ($check_table == "yeschemicals") {
            echo "<br>AAAAA<br>";
            $chem = check_chemical(from_item("list",$i),from_item("chem",$i),from_item("bran",$i),from_item("grande",$i),from_item("size",$i),from_item("price",$i),from_item("amount1",$i));

            echo $chem . "<br>";
            if ($chem =="OKif") {
              insert_sorunge(from_item("amount1",$i));
            }
          }elseif ($check_table == "yesequipment") {
            echo "<br>BBBBBB<br>";
            $equi = check_equipment(from_item("list",$i),from_item("bran",$i),from_item("size",$i),from_item("price",$i),from_item("amount2",$i));
            echo $equi . "<br>";
            if ($equi =="OKif") {
              insert_equipment(from_item("amount2",$i));
            }
            //insert_equipment(from_item("amount2",$i));
            echo "<br>checkDATA<br>";
          }elseif ($check_table == "yesequipment_scrounge") {
            echo "<br>CCCCCC<br>";
            $equi_scr = check_equipment_scrounge(from_item("list",$i),from_item("bran",$i),from_item("size",$i),from_item("price",$i),from_item("amount1",$i));
            echo $equi_scr . "<br>";
            //insert_equipment_sorunge(from_item("amount1",$i));
            if ($equi_scr =="OKif") {
              insert_equipment_sorunge(from_item("amount1",$i));
            }
          }else{
            echo "<br>********check_table_ERROR<br>";
          }
        

       }
       insert_status();
       insert_uesr();

 ?>
