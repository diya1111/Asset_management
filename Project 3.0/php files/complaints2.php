<?php
session_start();
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
 h3{
 	font-family:Bell MT;
       color:#fffada;
    }
#b2  {
    color:rgb(72,84,225);
    font-size:28;
    padding-bottom:30px;
    text-shadow :5px 8px 5px rgba(20,30,20,0.4);
 }
#text    {
             border-radius:5px;
            border:1px solid blue;
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
	line-height:390%;
	width:190px;
	letter-spacing:2px;
	font-size:15px;
	}

table	{
		text-align:center;
		width:650px;
		height:300px;
		box-shadow:4px 4px 4px grey;
	border:1px dotted blue;
	background:white;
	
}
th {
	 height:50px;
	font-family:Book Antiqua;
	font-size:16px;
	color:white;
	background:rgb(95,134,192);

}
td {
	 font-family:verdana;
	 color:rgb(90,44,201);
	 height:40px;
}
#rt {
		padding-top:6px;
		padding-left:50px;
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
#btn{
       background:rgb(95,134,192);
       color:white;
      font-family:verdana;
      font-size:12px;
      height:25px;
      width:80px;
      border-radius:2px;
      font-weight: bold;
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
	
<li><span>&#9750;</span>&nbsp&nbsp&nbsp&nbsp<a href="clienthome.php">Home</a></li>
	<li><hr></li>
	<li><span>&#9755;</span>&nbsp&nbsp&nbsp&nbsp<a href="updatecl.php">Updation</a></li>
	<li><hr></li>
	<li ><span>&#9762;</span>&nbsp&nbsp&nbsp&nbsp<a href="assetlistcl.php">Asset List</a></li>
	<li><hr></li>
	<li><span>&#10496;</span>&nbsp&nbsp&nbsp&nbsp<a href="assignassetcl.php">Assigned asset</a></li>
	<li><hr></li>
	<li  id="l1"><span>&#9998;</span>&nbsp&nbsp&nbsp&nbsp<a href="complaints.php">Complaints</a></li>
	<li><hr></li>
	<li><span>&#10161;</span>&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a></li></ul>
</div>
</div>

<div id="rightPart">
	<div id="right">
	 <?php
		echo "Logged : "  .$_SESSION['usrSession'];echo "&nbsp&nbsp";
	$username=$_SESSION['usrSession'];
	//echo "$userId";
	//exit();
	     ?>
</div>
<div id="rt">
	<form action="assignassetcl.php" method="POST" onsubmit="return formValidation()">
<?php
$name=$_POST['name'];
$uid=$_POST['uid'];
$aid=$_POST['aid'];
$email=$_POST['email'];
$status=$_POST['status'];
$remark=$_POST['remark'];

//$id=$_SESSION['newSession'];
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);
$sql="INSERT INTO complaints(uid,aid,name,email,remark,status) VALUES($uid,$aid,'$name','$email','$remark','$status')";
$result=mysql_query($sql,$con);
//echo "$sql";
//exit();
if($result)
{ 
	echo "<h3> Your request will soon be processed</h3>";
	$sql1="SELECT * FROM complaints where name='$username'";
$result1=mysql_query($sql1,$con); 

	echo "<table>";
	echo "<tr>";
	echo "<th>Complaint ID</th>";
	echo "<th>Asset ID</th>";
	echo "<th>Member ID</th>";
	echo "<th>Member Name</th>";
	echo "<th>Email</th>";
	echo "<th>Remark</th>";
	echo "</tr>";

	while($row=mysql_fetch_array($result1))
	{
	$a=$row['cid'];
	$b=$row['aid'];
	$c=$row['uid'];
	$d=$row['name'];
	$e=$row['email'];
	$f=$row['remark'];
	
	echo "<td>  ".$a."</td>";
	echo "<td>  ".$b."</td>";
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$d."</td>";
	echo "<td>  ".$e."</td>";
	echo "<td>  ".$f."</td>";
	echo "</tr>";
}
	echo "</table>";

	$sql3="update assetIssue set status='Issue_req' where uid=$c";
	$result3=mysql_query($sql3,$con); 
}

?>
</div>
<div id="new"><p></div>
</div>
</div>
<br>
<br><br><br>
</form>


<div id="ft">
<div id="footer">
	<div id="foot">@copyright</div>
</div>
</div>

</div>
</center>
</body>
</html>












































