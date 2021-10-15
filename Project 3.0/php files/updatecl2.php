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
h3{
	color:#fffada;
	font-family:Bodoni MT; 
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
		height:200px;
		box-shadow:4px 4px 4px grey;
	border:1px dotted blue;
	background:white;
	
}
th {
	 height:40px;
	font-family:Lucida Sans Unicode;
	font-size:16px;
	color:white;
	background:rgb(95,134,192);

}
td {
	 font-family:verdana;
	 color:rgb(90,44,201);
}
#rt {
		
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
      font-size:15px;
      height:22px;
      width:70px;
      border-radius:2px;
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
	
<li ><span>&#9750;</span>&nbsp&nbsp&nbsp&nbsp<a href="clienthome.php">Home</a></li>
	<li><hr></li>
	<li id="l1"><span>&#9755;</span>&nbsp&nbsp&nbsp&nbsp<a href="updatecl.php">Updation</a></li>
	<li><hr></li>
	<li><span>&#9755;</span>&nbsp&nbsp&nbsp&nbsp<a href="assetlistcl.php">Asset List</a></li>
	<li><hr></li>
	<li><span>&#10496;</span>&nbsp&nbsp&nbsp&nbsp<a href="assignassetcl.php">Assigned asset</a></li>
	<li><hr></li>
	<li><span>&#9998;</span>&nbsp&nbsp&nbsp&nbsp<a href="complaints.php">Complaints</a></li>
	<li><hr></li>
	<li><span>&#10161;</span>&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a></li></ul>
</div>
</div>

<div id="rightPart">
<div id="right">
<form action="booksearchmem2.php" method="POST" onsubmit="return formValidation()">
	 <?php
		echo "Logged : "  .$_SESSION['usrSession'];echo "&nbsp&nbsp<br>";
		$username=$_SESSION['usrSession'];
		$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$conn);
	$sql="select * from user_table where uname='$username' ";
$result=mysql_query($sql,$conn);
while($row=mysql_fetch_array($result))
{
	$a=$row['photo'];}
	echo "<td> <img src=".$a." width=60 height=60></td>";

	//echo "$userId";
	//exit();
	     ?>
</div>
<div id="rt">
<?php
$target = ""; 
 $target = $target .basename( $_FILES['photo']['name']); 
$pwd=$_POST['pwd'];
$phone=$_POST['phone'];
$photo=($_FILES['photo']['name']);

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);
$sql1="update user_table set pwd='$pwd',phone='$phone',photo='$photo' where uname='$username'";
$result1=mysql_query($sql1,$con); 
if($result1)
	{	
	echo "<h3>Updation Successful</h3>";
	}
$sql="select * from user_table where uname='$username'";
$result=mysql_query($sql,$conn);
//echo "$sql"; 
	
if($result)
{
echo "<table>";
echo "<tr>";
echo "<th>Profile</th>";
echo "<th>UserId</th>";
echo "<th>Name</th>";
echo "<th>Password</th>";
echo "<th>Usertype</th>";
echo "<th>Email</th>";
echo "<th>Phone</th>";

echo "</tr>";
while($row=mysql_fetch_array($result))
{
	$a=$row['photo'];
	$b=$row['uid'];
	$c=$row['uname'];
	$d=$row['pwd'];
	$e=$row['utype'];
	$f=$row['email'];
	$g=$row['phone'];
	
	echo "<td> <img src=".$a." width=80 height=80></td>";
	echo "<td>  ".$b."</td>";
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$d."</td>";
	echo "<td>  ".$e."</td>";
	echo "<td>  ".$f."</td>";
	echo "<td>".$g."</td>";
	

echo "</tr>";
}
	echo "</table>";
	
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

s