 <?php
include('conn.php'); 
$userid=$_POST['username'];
$password=$_POST['password']; 
$sql="SELECT password FROM ad_data WHERE userid='".$userid."'";
//echo $sql;
	$result=mysql_query($sql);
	$row = mysql_fetch_row($result);
	echo 'result'.$row[0];
	if($row[0] == $password)
	{
	     echo "Success";
	     header("location:promocode.php");
	}  
	else
	{
             echo "Faild";
	}
 ?> 
