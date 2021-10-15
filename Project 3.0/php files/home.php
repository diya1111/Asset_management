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
	
}

td {
	 width:500px;
	 height:120px;
	 border-radius:9px;
	box-shadow:4px 4px 4px grey;
	border:1px dotted blue;
	font-family:verdana;
	font-size:13px;
	color:white;
	font-weight:bold;

}
#new{
	border-radius:9px;
	box-shadow:4px 4px 4px grey;
	border:1px dotted blue;
	text-align: center;
	width:810px;
	background:white;
}
#new1{
	padding: 5px;
}
#rt {
		padding-top:50px;
	padding-left:20px;
}
#ee{
		text-shadow :5px 8px 5px rgba(20,30,20,0.35);
}
#dd{
	font-size:22px;
	font-family:verdana;
	color:#241571;

}
#de{
	font-size:22px;
	font-family:verdana;
	color:#008080;

}

#df{
	font-size:22px;
	font-family:verdana;
	color:#4a4c4d;

}
#dg{
	font-size:22px;
	font-family:verdana;
	color:#b2560d;

}
#ii	{
	padding-top:5px;
	padding-bottom:5px;
	
}
#i2	{
	padding-left:1px;
}
#f1{
	background:linear-gradient(white,#3944bc);
}
#f2{
	background:linear-gradient(white,#48aaad);
}
#f3{
	background:linear-gradient(white,#59788e);
}
#f4{
	background:linear-gradient(white,#ec9706);
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
#dropdown{
	display:none;
	position:right;
	min-width:120px;
	z-index:1;
}
#dropdown:hover:{
	background:lightblue;
    float:right;
}
#dd:hover #dropdown{
	display:block;
	line-height:220%;
	color:yellow;
	width:200px;
	background:grey;
	font-size: 18px;
}
#l2{
	font-size:15px;
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
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
	<?php

$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("atpl",$con);
		$sql="select * from assetIssue where status='Issue_req'";
		$result=mysql_query($sql,$con);
		$flag=0;
		while($row=mysql_fetch_array($result))
		{
			$flag=1;//true;
		}
?>
<div id="menuPart">
<ul>
	
<li  id="l1"><span>&#9750;</span>&nbsp&nbsp&nbsp&nbsp<a href="home.php">Home</a></li>
	<li><hr></li>
	<li><span>&#10066;</span>&nbsp&nbsp&nbsp&nbsp<a href="hardware.php">Hardwares</a></li>
	<li><hr></li>
	<li><span>&#9783;</span>&nbsp&nbsp&nbsp&nbsp<a href="software.php">Softwares</a></li>
	<li><hr></li>
	<div id="dd"><li id="l2"><span>&#9755;</span>&nbsp&nbsp&nbsp&nbsp<a href="viewmem.php">Member List</a></li>
	<div id="dropdown">
		<span>&#9766;</span>&nbsp&nbsp&nbsp&nbsp&nbsp<a href='reports.php'>Reports</a></div></div>
	<li><hr></li>
	<li><span>&#10496;</span>&nbsp&nbsp&nbsp&nbsp<a href="issueview.php">Issue Details</a></li>
	<li><hr></li>
	<li><span>&#9791;</span>&nbsp&nbsp&nbsp&nbsp<a href="memadd.php">Add members</a></li>
	<li><hr></li>
	<li><span>&#9998;</span>&nbsp&nbsp&nbsp&nbsp<a href="complaintadmin.php">Complaints<?php if($flag==1) echo "<font color='red'>*</font>";?></a></li>
	<li><hr></li>
	<li><span>&#10161;</span>&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a></li></ul>
</div>
</div>

<div id="rightPart">
<div id="right">
</div>
<div id="rt">
<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);



$sql="SELECT * FROM assets";
$result1=mysql_query($sql,$con); 
$asset_count=mysql_num_rows($result1);
//echo "$sql";
//exit();
$sum1=0;
$count=0;
while($row=mysql_fetch_array($result1))
{
	$sum1++;
	
}

$sql2="SELECT * FROM assets WHERE atype ='hardware'";
$result2=mysql_query($sql2,$con); 
$hardware_count=mysql_num_rows($result2);
//echo "$sql";
//exit();
$sum2=0;
$count=0;
while($row=mysql_fetch_array($result2))
{
		$sum2++;	
}


$sql3="SELECT * FROM assets WHERE atype ='software'";
$result3=mysql_query($sql3,$con); 
$software_count=mysql_num_rows($result3);
//echo "$sql";
//exit();
$sum3=0;
$count=0;
while($row=mysql_fetch_array($result3))
{
	$sum3++;
	
}

$sql4="SELECT * FROM complaints";
$result4=mysql_query($sql4,$con); 
$complaints_count=mysql_num_rows($result4);
//echo "$sql";
//exit();
$sum4=0;
$count=0;
while($row=mysql_fetch_array($result4))
{
	
	$sum4++;
	
}
$sql5="SELECT * FROM assetIssue where status='Issue_req'";
$result5=mysql_query($sql5,$con); 
$pending_count=mysql_num_rows($result5);

$sql6="SELECT * FROM assetIssue where status='Issued'";
$result6=mysql_query($sql6,$con); 
$approved_count=mysql_num_rows($result6);

$sql7="SELECT * FROM assetIssue where status='On_process'";
$result7=mysql_query($sql7,$con); 
$updatep_count=mysql_num_rows($result7);

$sql8="SELECT * FROM assetIssue where status='Withdrawn'";
$result8=mysql_query($sql8,$con); 
$withdraw_count=mysql_num_rows($result8);


?>
<table cellspacing="20">
	<tr>
	
	 </td> 
	<td width=60 height=80 id="f1"> 
	 <div id="dd"><?php echo $sum1 ?>  </div>
	 <br>
	<div id="ee">Total Assets</div>

	</td>


	 </td> 
	<td width=40 height=80 id="f2"> 
	 <div id="de"><?php echo $sum2 ?>  </div>
	 <br>
	<div id="ee">Hardwares</div>

	</td>


	 </td> 
	<td width=40 height=80 id="f3"> 
	 <div id="df"><?php echo $sum3 ?>  </div>
	 <br>
	<div id="ee">Softwares</div>

	</td>


	 </td> 
	<td width=40 height=80 id="f4"> 
	 <div id="dg"><?php echo $sum4 ?>  </div>
	 <br>
	<div id="ee">Complaints</div>

	</td>
</tr>
</table>
<br>

<div id="new"><div id="new1"><script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	['Data','Count'],
          <?php
          $text = array('Assets','Hardwares','Softwares','Complaints','Update Pending','Approved','Pending req','Withdrawn');
          $value = array($asset_count,$hardware_count,$software_count,$complaints_count,$updatep_count,$approved_count,$pending_count,$withdraw_count);
          for($i=0;$i<8;$i++){
          	echo "['".$text[$i]."','".$value[$i]."'],";
          }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Chart Representation',
           // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
     <div id="columnchart_material" style="width:absolute; height: 200px;"></div></div>
</div>
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

