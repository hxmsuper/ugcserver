 <?php
include('conn.php'); 
$promoid=$_GET['promoid'];
$phonenum=$_GET['phonenum']; 
$key='unitygames';
$sql="SELECT returncode FROM ad_promocode WHERE promoid='".$promoid."'"."&&phonenum='".$phonenum."'"."&& success=0"; 
	$result=mysql_query($sql);
	$row2 = mysql_fetch_row($result);
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	if(mysql_num_rows($result))
	{ 
	      	//echo $row2[0];
		$arr = array('retuncode'=>$row2[0],'key'=>$key);
		echo json_encode($arr);
		$sql1="UPDATE ad_promocode SET success=5 WHERE promoid='".$promoid."'"; 
		$result=mysql_query($sql1);	
	}
	else 
	echo '0';
  	//header("location:promocode.php");
 
 ?> 
