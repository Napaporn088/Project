<?php 
		include("../Database.php");
		//$sql = "SELECT * FROM equipment WHERE name LIKE '%".$search."%'"  ;
        $sql_equipmint = $conn->query("SELECT * FROM equipment");
        $i =0;
         while ($row = $sql_equipmint->fetch_row()) {
			        	$data[$i]=$row[1];
			        	$grade[$i]=$row[2];
			        	$price[$i] = $row[4];
			        	$size[$i] = $row[5];
			        	$i++;


        }
        json_encode($data);


        $sql_chemical = $conn->query("SELECT * FROM chemicals");
        $i=0;
        while ($rows = $sql_chemical->fetch_row()) {
        				$chemicals_formula[$i]=$rows[3];
        				$brand[$i] = $rows[4];
        				$grade[$i] = $rows[5];
        				$size[$i]= $rows[6];
        				$price[$i]=$rows[7];
        				
        	
        }

       

                    function check_list_type($List){
                        include '../Database.php';
                        $sql_chemical = "SELECT * FROM chemicals";
                        $query = mysqli_query($conn,$sql_chemical);
                        while ($result = mysqli_fetch_row($query)) {
                                if (rtrim($List) == rtrim($result['2'])) {
                                        $type = $result['0'];
                              }
                       }
                       echo "Type ID chemis :  ".$List."->". $type."<br>";
                       return $type; 
                   }
                   function check_list_id($List){
                    include '../Database.php';
                        $sql_equipment = "SELECT * FROM  equipment";
                        $query = mysqli_query($conn,$sql_equipment);
                        while ($result = mysqli_fetch_row($query)) {
                                if (rtrim($List) == rtrim($result['1'])) {
                                        $ID = $result['0'];
                                }

                       }
                       echo "Type ID Eq : ".$List."->". $ID."<br>";
                       return $ID; 

                   }
                  function check_list_id_scrounge($list){
                    include '../Database.php';
                    $sql_equipment_scrounge  = "SELECT * FROM equipment_scrounge";
                    $query = mysqli_query($conn,$sql_equipment);
                    while ($result = mysqli_fetch_row($query)) {
                            if (rtrim($List)== rtrim($result['1'])) {
                                $ID_SCR = $result['0'];
                                echo $ID_SCR ;
                            }

                    }
                    return $ID_SCR;
                  }

        
 ?>