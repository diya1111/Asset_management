<html>
<style>
table	{
		text-align:center;
		width:650px;
		height:50px;
		border-radius:5px;
		box-shadow:2px 2px 2px white;
	
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
#rr{
		align-content:center;
}
</style>
<div id="rr">
<?php
$q=$_GET["q"];

$con=mysql_connect("localhost","root","");
mysql_select_db('atpl',$con);

if($q!=""){
$sql="SELECT a.aid,a.uid,a.uname,b.aname,a.noa,a.status FROM assetIssue a,assets b WHERE a.aid=b.aid and uid=$q";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)>0) {
	echo "<table width=100>";
	echo "<tr><th>Asset Id</th> <th>User Id </th><th>User Name</th> <th>Asset Name</th><th> No. of assets aasigned</th><th>Status</th></tr>";

	while($row = mysql_fetch_array($result)) {
	//$c=$row['assetno'];
	$d=$row['aid'];
	$e=$row['uid'];
	$f=$row['uname'];
	$g=$row['aname'];
	$h=$row['noa'];
	$i=$row['status'];
	

	 echo "<tr>";
	//echo "<td>".$c."</td>";
	 echo "<td>".$d."</td>";
	 echo "<td>".$e."</td>";
	  echo "<td>".$f."</td>";
	   echo "<td>".$g."</td>";
	    echo "<td>".$h."</td>";
	    echo "<td>".$i."</td>";

	echo "</tr>";
	echo "</tr>";
	} //end of while
	echo "</table>";
	} // end of if
	else{
	echo "<h3>No Data Found</h3> ";
	} 
} // end of q checking
?>
</div>
</html>