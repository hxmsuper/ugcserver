 <?php
include('conn.php'); 
$promoid		=$_POST['promoid'];
$returncode	=$_POST['returncode'];
$phonenum	=$_POST['phonenum']; 
 $sql = "INSERT INTO ad_promocode(promoid,returncode,phonenum,success) 
	VALUES('".$promoid."','".$returncode."','".$phonenum."',0)";

 mysql_query($sql);
 echo 'SUCCESS';
header("location:promocode.php");
 ?> 
