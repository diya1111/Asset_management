<?php
session_start();
?>
 <?php  
         //Starting the session
         //session_start();   
         //$id = session_id();
         //echo "Session Id: ".$id;
      ?>
<html>
<head>
<style>
#container {
	width:100%;
	height:600px;
    boder:1px solid white;
	background:lemonchiffon;
	}
	#top  {
                              width:100%;
                              height:23px;
                              background:rgb(95,134,192);
                             color:white;
                             text-align:right;
                       }
	#banner    {
                      width:100%;
                    height: 90px;
                   background:linear-gradient(rgb(37,113,109),white);
                 padding-top:5px;
           
             }
#b2  {
    color:rgb(72,84,225);
    font-size:28;
    padding-bottom:30px;
    text-shadow :5px 8px 5px rgba(20,30,20,0.4);
 }
 #text    {
             border-radius:5px;
            border:1px solid orange;
             width:180px;
            height:20px;
              }
#leftPart	{
	float:left;
	width:22%;
	background:rgb(39,50,56);
	height:460px;
	text-align:left;
	}
#left	{
	padding-right:120px;
	width:35%
	height:430px;
	}
#rightPart	{
			float:right;
			height:460px;
			width:78%;
			background-image:url("back.jpg");
			background-size:cover;
			opacity:0.9;
}
#right	{
	font-size:15px;
	font-family:Bahnschrift;
	color:white;
	text-align:right;
	}
ul	{
	line-height:150%;
	}
#menupart	{
		text-align:left;
		padding-right:40px
		width:20px;
		height:40px;
		}

li	{
	list-style-type:none;
	background-color:rgb(39,50,56);
	padding-left:10px;
	color:white;
	font-family:tahoma;
	text-align:left;
	line-height:240%;
	width:190px;
	letter-spacing:2px;
	}

table	{
		text-align:center;
		width:650px;
		height:150px;
		background:rgb(95,134,192);
		border-radius:5px;
		box-shadow:2px 2px 2px white;
	
}
tr:nth-child(even){
		background:white;

}
tr:nth-child(odd){
	background:white;
}

td {
	 height:20px;
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
	font-family:Book Antiqua;
	font-size:16px;
	color:white;
	background:rgb(95,134,192);

}
#rt1 {
		padding-top:25px;
		
}
h3{
	color:#fffada;
	font-family:Bodoni MT; 
}
#ee{
		text-shadow :5px 8px 5px rgba(20,30,20,0.35);
}
#dd{
	font-size:18px;
	font-family:verdana;
	color:black;

}

#footer	
	{
	clear:both;
	background:#48494B;
	height:37px;
	padding-top:10px;

	}
#foot	{
	color:white;
	font-family:Bahnschrift;
	}
#ft	{
	padding-top:20px;
	}
a {
  text-decoration:none;
  color:white;
  font-family:verdana;
  }
a:hover {
  color:brown;
  text-decoration:underline;
  text-transform:uppercase;
  color:red;
  font-size:15px;
  }
li:hover  {
    background:lightblue;
    color:navy;
}
#dropdown{
	display:none;
	position:right;
	min-width:140px;
	z-index:1;
}
#dropdown:hover:{
	background:lightblue;
    color:white;
    float:right;
}
#dd:hover #dropdown{
	display:block;
	line-height:240%;
	color:navy;
	width:200px;
	background:grey;
}
#l1	{
	background:lightblue;
}
hr{
	height:0.5px;
}
#back{
	color:black;
	font-size:15px;
}
#back:hover{
	color:red;
	text-transform:lowercase;
}
#back1{
	width:150px;
	height:20px;
	background:radial-gradient(white,rgb(48,65,72));
	border-radius:4px;
}
#b1{
	padding-left:280px;
}

</style>

<script>
function validateForm()
{
x=document.getElementById("uname").value;
y=document.getElementById("upassword").value;
if (x == "" || y == "")
{
alert("Field is empty");
return false;
}
}
</script>
</head>
<body>
<center>
<div id="container">
	<div id="top">Follow us on:<img src="logo.jpg" width=100 height=22></div>
<div id="banner">
<div id="b2"><h2>Asset Management System</h2></div>
</div>
	<div id="content">
<form action="booksearchmem2.php" method="POST" onsubmit="return formValidation()">
<div id="leftPart">
<div id="menuPart">
<ul>
	
	<li ><span>&#9750;</span>&nbsp&nbsp&nbsp&nbsp<a href="home.php">Home</a></li>
	<li><hr></li>
	<li><span>&#10066;</span>&nbsp&nbsp&nbsp&nbsp<a href="hardware.php">Hardwares</a></li>
	<li><hr></li>
	<li><span>&#9783;</span>&nbsp&nbsp&nbsp&nbsp<a href="software.php">Softwares</a></li>
	<li><hr></li>
	<div id="dd"><li id="l1"><span>&#9755;</span>&nbsp&nbsp&nbsp&nbsp<a href="viewmem.php">Member List</a></li>
	<div id="dropdown">
		<span>&#9766;</span>&nbsp&nbsp&nbsp&nbsp&nbsp<a href='reports.php'>Reports</a></div></div>
	<li><hr></li>
	<li><span>&#10496;</span>&nbsp&nbsp&nbsp&nbsp<a href="issueview.php">Issue Details</a></li>
	<li><hr></li>
	<li><span>&#9791;</span>&nbsp&nbsp&nbsp&nbsp<a href="memadd.php">Add members</a></li>
	<li><hr></li>
	<li><span>&#9998;</span>&nbsp&nbsp&nbsp&nbsp<a href="complaintadmin.php">Complaints</a></li>
	<li><hr></li>
	<li><span>&#10161;</span>&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a></li>
</ul>
</div>
</div>

<div id="rightPart">
<div id="right">
</div>
<form enctype="multipart/form-data"enctype="multipart/form-data" action="memadd2.php" method="POST" onsubmit="return formValidation()">
<div id="rt1">
	 	<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);
$sql="SELECT a.photo,a.uid,a.uname,b.aname,b.atype,b.availability,c.noa FROM user_table a,assets b,assetIssue c WHERE a.uid=c.uid and b.aid=c.aid";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)>0) {
	echo "<table>";
	echo "<tr><th>Profile</th> 
	<th>User Id </th>
	<th>User Name</th>
	 <th>Asset Name</th>
	  <th>Asset Type</th>
	 <th> Total Availability</th>
	 <th>NO. of assigned assets</th></tr>";

	while($row = mysql_fetch_array($result)) {
	//$c=$row['assetno'];
	$d=$row['photo'];
	$e=$row['uid'];
	$f=$row['uname'];
	$g=$row['aname'];
	$h=$row['atype'];
	$i=$row['availability'];
	$j=$row['noa'];

	 echo "<tr>";
	//echo "<td>".$c."</td>";
	 echo "<td><img src=".$d." width=60 height=60></td>";
	 echo "<td>".$e."</td>";
	  echo "<td>".$f."</td>";
	   echo "<td>".$g."</td>";
	    echo "<td>".$h."</td>";
	    echo "<td>".$i."</td>";
	     echo "<td>".$j."</td>";

	echo "</tr>";
	} //end of while
	echo "</table>";
	} // end of if
	else{
	echo "<h3>No Data Found</h3> ";
	} 
?>
<div id="new"><p></div>
</div>
</div>
<br>
<br><br><br>
</form>
</div>


<div id="ft">
<div id="footer">
	<div id="foot">@copyright</div>
</div>
</div>

</div>
</center>
</body>
</html>

