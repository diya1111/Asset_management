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
 #btn{
       background:rgb(95,134,192);
       color:white;
      font-family:verdana;
      font-size:15px;
      height:30px;
      width:80px;
      border-radius:2px;
      font-weight: bold;
    }
  #pos{
  		text-align: center;
  }
 #text    {
             border-radius:5px;
            border:1px solid rgb(95,134,192);
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
	line-height:120%;
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
		text-align:left;
		width:650px;
		height:400px;
		background:white;
		border-radius:5px;
		box-shadow:2px 2px 2px white;
	
}

td {
	 height:30px;
	font-family:Lucida Sans Unicode;
	font-size:16px;
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
	font-size:21px;
	color:white;
	background:rgb(95,134,192);

}
#rt1 {
		padding-top:30px;
		padding-left:20px;
		
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
#l1	{
	background:lightblue;
}
hr{
	height:0.5px;
}
#back{
	color:black;
}
#back:hover{
	color:rgb(205,39,168);
}
#back1{
	width:150px;
	height:20px;
	background:radial-gradient(white,rgb(95,134,192));
	border-radius:4px;

}
#b1{
	padding-left:280px;
}
#th{
	text-align:center;
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
<div id="leftPart">
<div id="menuPart">
<ul>
	
	<li><span>&#9750;</span>&nbsp&nbsp&nbsp&nbsp<a href="home.php">Home</a></li>
	<li><hr></li>
	<li><span>&#10066;</span>&nbsp&nbsp&nbsp&nbsp<a href="hardware.php">Hardwares</a></li>
	<li><hr></li>
	<li><span>&#9783;</span>&nbsp&nbsp&nbsp&nbsp<a href="software.php">Softwares</a></li>
	<li><hr></li>
	<li><span>&#9755;</span>&nbsp&nbsp&nbsp&nbsp<a href="viewmem.php">Member List</a></li>
	<li><hr></li>
	<li id="l1"><span>&#10496;</span>&nbsp&nbsp&nbsp&nbsp<a href="issueview.php">Issue Details</a></li>
	<li><hr></li>
	<li><span>&#9791;</span>&nbsp&nbsp&nbsp&nbsp<a href="memadd.php">Add members</a></li>
	<li><hr></li>
	<li><span>&#9998;</span>&nbsp&nbsp&nbsp&nbsp<a href="complaintadmin.php">Complaints</a></li>
	<li><hr></li>
	<li><span>&#10161;</span>&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a></li></ul>
</ul>
</div>
</div>

<div id="rightPart">
<div id="right">
</div>
<form enctype="multipart/form-data"enctype="multipart/form-data" action="newissue2.php" method="POST" onsubmit="return formValidation()">
<div id="rt1">
<table>
	<tr>
		<th colspan="2" id="th">New Issue</th></tr>
	<tr>
		<td>Enter the Asset Id : </td>
		<td><select id="text" name="aid">
			<option></option>
	 	<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);
$sql="select aid from assets";
$result=mysql_query($sql,$con); 
while($row=mysql_fetch_array($result))
{
$d=$row['aid'];
echo "<option value='$d'>$d</option>";
}
?></td>
	</tr>

<tr>
	<td>NO of Assets to assign:</td>
	<td><select name="noa"  id='text'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
</select></td>
	</tr>

<tr>
		<td>Enter the Member ID</td>
		<td><input type="text" name="uid" id="text" placeholder="Id"></td>
	</tr>

	<tr>
		<td>Enter the Member Name</td>
		<td><input type="text" name="uname" id="text" placeholder="Name"></td>
	</tr>

<!-- <tr>
		<td>Date of Issue: </td>
		<td><input type="date" name="date_issue" id="text" placeholder="Date"></td>
	</tr>
 -->
<tr>
		<td> Status : </td>
		<td><input type="status" name="status" id="text"></td>
	</tr>


<tr>
		<td colspan=2 id="pos"><input type="submit" value="Submit" action="newissue2.php" id="btn"></td>
	</tr>
</table>
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

