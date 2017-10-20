<?php 

function fetch_data(){
	include 'Database.php';
	$sql = "SELECT * FROM chemicals " ;
    $query = mysqli_query($conn,$sql);
    $count=0;
    while ($result = mysqli_fetch_row($query)) {
    	$size[$count]=$result[6];
    	$price[$count]=$result[7];
    	$count++;
    	
    }
$str =$size[249];
$length = strlen($str);
for ($i=0; $i < $length; $i++) { 
   	echo $str[$i];
   }   
$size_int= preg_replace('/[a-zA_Z]/',"",$size[249]);
function extract_int($str){
	$str = str_replace(",","",$str);
	preg_match('/[[:digit:]]+\,?[[:digit:]]*/', $str,$regs);
	return(doubleval($regs[0]));
}

$price_int=extract_int($price[249]); //ค่าหน้า
$unit = $str[$i-2].$str[$i-1]; //หน่วย 


if($unit ==" g"){
	echo "<br>s".$price_int;
	echo "<br>ss".$size_int."<br>";

	$monny = $price_int/$size_int;
	echo "<br>".$monny;
}
if ($unit=="kg") {
	$unit_cnverter = $price_int*1000;
	$monny = $unit_cnverter/$size_int;

	echo "<br>".$monny;
}

}

fetch_data();
 ?>