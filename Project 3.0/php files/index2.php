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
#tt{
    padding-bottom:10px;
}
#banner    {
                      width:100%;
                    height: 90px;
                   background:linear-gradient(rgb(37,113,109),white);
                 padding-top:5px;
           
             }
table {
        background:white;
        width:400px;
        height:280px;
        text-align:center;
        border-radius:8px;
        box-shadow:4px 4px 4px white;
}
th{
      color:rgb(95,134,192);
      font-family:verdana;
      font-size:20px;
      height:50px;
    }

td{
     color:rgb(95,134,192);
      font-family:verdana;
      font-size:15px;
       height:45px;
}
#btn{
       background:rgb(95,134,192);
       color:white;
      font-family:verdana;
      font-size:15px;
      height:35px;
      width:80px;
      border-radius:2px;
      font-weight: bold;
    }
 #text    {
             border-radius:5px;
            border:1px solid blue;
             width:180px;
            height:20px;
}
#rt{
    padding-top:60px;
    padding-left:290px;
}
#leftPart {
  float:left;
  width:30%;
  background:rgb(39,50,56);
  height:460px;
  text-align:left;
  }
 #rightPart {
      float:right;
      height:460px;
      width:70%;
      background-image:url("back1.jpg");
      background-size:cover;
      opacity:0.9;
}
#pp{
    text-align:center;
    padding-left:10px;
}
#para  {
       padding-top:120px; 
       font-size:22px;
       letter-spacing:3px;
       font-family:Bell MT;
       color:#fffada;
       text-align:left;
       justify-content:flex-start;
          }
 #b2  {
    color:rgb(72,84,225);
    font-size:28;
    padding-bottom:30px;
    text-shadow :5px 8px 5px rgba(20,30,20,0.4);
 }
#menuRow  {
             width:100%;
	     height:50px;
	     background:black;
	      text-align:left;
                 color:white;
                 }

#text         {
               font-size:14px;
               font-family:Corbel;
               letter-spacing:2px;
                }

#leftHead     {
                        font-size: 30px;
                         color:white;
                          padding-top:40px;
                         }
#last    {
              border:0px;
          }
#left{
	padding-top:120px; 
       font-size:22px;
       letter-spacing:3px;
       font-family:Bell MT;
       color:#fffada;
       text-align:center;
   }
                
#footer 
  {
  clear:both;
  background:#48494B;
  height:37px;
  padding-top:12px;

  }
#foot {
  color:white;
  font-family:Bahnschrift;
  letter-spacing: 2px;
  }

ul         {
              list-style-type:none;
           }
li,ul       {
              float:left;
          }
li            {
                border:2px solid white;
                 font-size:15px;
                  color:white;
                  letter-spacing:3px;
                 border-top:0px;
                 border-bottom:0px;
                padding-left:10px;
                 padding-right:10px;
            
                 }
li,a         {
              text-decoration:none;
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
    color:red;
}
#dd{
		color:blue;
		font-size:20px;
}
#ee{
	padding-bottom: 70px;
}
#img{
	border-radius:5% 5% 0% 0% ;
	opacity: 0.8;
}
#img1{
    border-radius:5px;
    box-shadow:2px 2px grey;
}
h4{
  color:#fffada;
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
<div id="menupart">
	<ul>
  
  <li id="l1"><a href="index1.php">Home</a></li>
  <li><a href="info1.php">About</a></li>
  <li><a href="info2.php">Contact us</a></li>
</ul>
<div id="left">
 <?php
 $aa=$_POST['uname'];
	$bb=$_POST['pwd'];
	$cc=$_POST['utype'];
  //$dd=$_POST['uid'];
 $flag=0;
 $con=mysql_connect("localhost","root","");
	$db=mysql_select_db("atpl",$con);
	
	$sql="select * from user_table where uname='$aa' AND pwd='$bb'";
	$result=mysql_query($sql,$con);
   while($row=mysql_fetch_array($result))
  {
    
    $flag=1;
    $_SESSION['usrSession']=$aa;
  }
  if($flag==1){
     echo "Welcome : "  .$_SESSION['usrSession'];echo "&nbsp&nbsp";
  }
  else{
    echo "<h3><img src='error.jpg' width=100 height=100 id='img1'>";
  }
	     ?>
	 </div>
</div>
</div>

<div id="rightPart">
	<div id="rt">
      <?php
	$aa=$_POST['uname'];
	$bb=$_POST['pwd'];
	$cc=$_POST['utype'];
  $dd=$_POST['uid'];
  $num=$_POST['no'];
	 //echo "$dd";
	 //exit();
	$flag=0;
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("atpl",$con);

  $sql1="select no from captcha where uid=$dd and no=$num";
    $result1=mysql_query($sql1,$con);
    $row=mysql_fetch_array($result1);
    $a=$row['no'];

      if($result1 =$a)
         { echo "<script>alert('Valid Captcha')
                   </script>";
    
                 


	$sql="select * from user_table where uname='$aa' AND pwd='$bb'";
	// echo "$sql";
	 //exit();
	$result=mysql_query($sql,$con);

	if($cc =="admin"){
	while($row=mysql_fetch_array($result))
	{
		$flag=1;
		$_SESSION['usrSession']=$aa;
    $_SESSION['newSession']=$dd;
		//$_SESSION['emSession']=$dd;
		// $_SESSION['idSESSION']=$dd;
		$a=$row['uname'];
	                 $b=$row['email'];
	
	}
	if($flag==1)
	{
		//echo " <h3> Login as  " .$_SESSION['usrSession'];
		echo "<br>";
		echo "<table>";
		echo "<tr>";
		echo "<th colspan=2 id='ee'><img src='admin.jpg' width=400 height=140px id='img'></th>";
		echo "</tr>";
	echo "<tr>";
	echo "<td>Admin name : </td>";
	echo "<td id='new'>$aa</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Email :</td>";
	echo "<td id='new'>$b</td>";
	echo "</tr>";
	echo "</table>";
		
		echo "<h2><div id='dd'><a href='home.php'>Proceed</a></div></h2>";
	}
	else
		
		{echo "<br>";
		echo "<h4>Invalid username or password</h4>";
		echo "<h4>Login Failed</h4>";
		echo "<h2><div id='dd'><a href='index1.php'>Go to Login Page</a></h2>";
		}

}
else{
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("atpl",$con);
	
	$sql="select * from user_table where uname='$aa' AND pwd='$bb'";
	// echo "$sql";
	// exit();
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result))
	{
		$flag=1;
		$_SESSION['usrSession']=$aa;
		// $_SESSION['idSESSION']=$dd;
		$a=$row['uname'];
	                 $b=$row['email'];
	
	}
	if($flag==1)
	{
		//echo " <h3> Login as  " .$_SESSION['usrSession'];
		echo "<br>";
		echo "<table>";
		echo "<tr>";
		echo "<th colspan=2 id='ee'><img src='user.jpg' width=400 height=140px id='img'></th>";
		echo "</tr>";
	echo "<tr>";
	echo "<td>User name : </td>";
	echo "<td id='new'>$aa</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Email :</td>";
	echo "<td id='new'>$b</td>";
	echo "</tr>";
	echo "</table>";
		
		echo "<h2><div id='dd'><a href='clienthome.php'>Proceed</a></div></h2>";
	}
	else
		
		{echo "<br>";
		echo "<h4>Invalid username or password</h4>";
		echo "<h4>Login Failed</h4>";
		echo "<h2><div id='dd'><a href='index1.php'>Go to Login Page</a></h2>";
		}

}
}
 else{
      echo "<script>alert('Invalid Captcha')
                   </script>";
    echo "<h4>Login Failed</h4>";
    echo "<h2><div id='dd'><a href='index1.php'>Go to Login Page</a></h2>";
 }
?>
</div>
</div>
</div>
<br>
<br>
<div id="ft">
<div id="footer">
	<div id="foot">@copyright</div>
</div>
</div>

</div>
</center>
</body>
</html>

