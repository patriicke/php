<?php
 $DB_server="127.0.0.1";
 $DB_user_name="PATRICK";
 $DB_user_password="DATAbase@123";
 $DB_name="files";
 $connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);
 if($connect){
 $villages=fopen('Village.txt','r') or die("Unable to get the file");
 while(!feof($villages)){
 $line=fgets($villages);
 $arrVillage=explode(',',$line);
 $villageId=trim($arrVillage[0]);
 $cellId=trim($arrVillage[1]);
 $villageName=trim($arrVillage[2]);
 $query=mysqli_query($connect, "INSERT INTO village VALUES($villageId,$cellId,'$villageName')");
 echo $cellId." with ".$villageId." and ".$villageName." is added to database";
 echo "<br/>";
}
fclose($villages);
}else{
echo "Connection error";
}

?>
//Reading a file

// $province=fopen('Province.txt','r') or die("Unable to get the file");
// echo fread($province , filesize("Province.txt"));
// fclose($province);

//Using fgets to get a single line

// $province=fopen('Province.txt','r') or die("Unable to get the file");
// echo fgets($province);
// fclose($province);

//feof functions
