 <?php
include('conn.php'); 
  
$sql="SELECT * FROM ad_promocode";
//echo $sql;
$result=mysql_query($sql); 
echo'<fieldset><legend>Promo List</legend>';
echo'<table border = .5>';
echo'<tr >';
 		echo'<th>Promoid</th>';
		echo'<th>returncode</th>';	
 		echo'<th>phonenum</th>';
		echo'<th>success</th>';
	echo'</tr>';
while($row = mysql_fetch_row($result))
{
	echo'<tr>';
 		echo'<td style="width:25%">'.$row[0].'</td>';
		echo'<td style="width:25%">'.$row[1].'</td>';	
 		echo'<td style="width:25%">'.$row[2].'</td>';
		echo'<td style="width:25%">'.$row[3].'</td>';
	echo'</tr>';
}
echo'</table>';
echo'</fieldset>';
echo'
<fieldset>
<legend>Add Promo</legend>
<form name="LoginForm" method="post" action="addpromo.php" onSubmit="return InputCheck(this)">
<p>
<label for="promoid" class="label">PormoID:</label>
<input id="promoid" name="promoid" type="text" class="input" />
<p/>
<p>
<label style="width:100px" for="returncode" class="label">ReturnCode:</label>
<input id="returncode" name="returncode" type="text" class="input" />
<p/>
<p>
<label for="phonenum" class="label">PhoneNum:</label>
<input id="phonenum" name="phonenum" type="text" class="input" />
<p/>
 
<p>
<input type="submit" name="submit" value="  确 定  " class="left" />
</p>
</form>
</fieldset>';

 ?> 
