<html>
<style>
table	{
		text-align:center;
		width:450px;
		height:150px;
		background:rgb(95,134,192);
		border-radius:5px;
		box-shadow:2px 2px 2px white;
	
}
tr:nth-child(even){
		background:white;

}
tr:nth-child(odd){
	background:rgb(121,153,196);
}

td {
	 height:30px;
	font-family:Lucida Sans Unicode;
	font-size:15px;
	color:rgb(90,44,201);
	font-weight:bold;

}
#td{
	height:30px;
	font-family:Lucida Sans Unicode;
	font-size:15px;
	color:rgb(205,39,168);
	font-weight:bold;

}
th {
	 height:40px;
	font-family:verdana;
	font-size:17px;
	color:white;
	background:rgb(95,134,192);
}
</style>
<?php
$q=$_GET["q"];

$con=mysql_connect("localhost","root","");
mysql_select_db('atpl',$con);

if($q!=""){
$sql="SELECT * FROM assetIssue WHERE assetno=$q";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)>0) {
	echo "<table width=400>";
	echo "<tr><th>Issue Id</th> <th>Asset Id </th><th>Member Id</th> <th>Status</th></tr>";

	while($row = mysql_fetch_array($result)) {
	$c=$row['assetno'];
	$d=$row['aid'];
	$e=$row['uid'];
	$f=$row['status'];

	 echo "<tr>";
	 echo "<td align='center'>".$c."</td>";
	 echo "<td  align='center'>".$d."</td>";
	 echo "<td  align='center'>".$e."</td>";
	  echo "<td  align='center'>".$f."</td>";
	echo "</tr>";
	echo "</tr>";
	} //end of while
	echo "</table>";
	} // end of if
	else{
	echo " No Employee Found ";
	} 
} // end of q checking
?>
</html>