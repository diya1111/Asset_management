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
        width:350px;
        height:280px;
        text-align:center;
        border-radius:8px;
        box-shadow:4px 4px 4px white;
}
th{
      color:rgb(95,134,192);
      font-family:verdana;
      font-size:20px;
      text-align:center;
    }

td{
     color:rgb(95,134,192);
      font-family:Constantia;
      font-size:15px;
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
#bt{
      text-align:center;
    }
 #text    {
             border-radius:5px;
            border:1px solid blue;
             width:180px;
            height:20px;
}
#rt{
    padding-top:60px;
    padding-left:300px;
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
  color:lightblue;
  font-family:verdana;
  }
a:hover {
  color:brown;
  text-decoration:underline;
  text-transform:uppercase;
  color:red;
  font-size:12px;
  }
li:hover  {
    background:lightblue;
    color:red;
}
             </style>
  <script>
function doChk()
{        
var id=document.f1.no.value;
//var pLen=pwd.length;

if(id =="")
{
alert("Field is blank");
return false;
}
else{
 alert("Verification Successful");
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
  
  <li id="l1"><a href="index1.php">Home</a></li>
  <li><a href="info1.php">About</a></li>
  <li><a href="info2.php">Contact us</a></li>
</ul>
<br>
<br>
<div id="pp">
<div id="para">Assets put money in your pocket, whether you work or not, and liabilities take money from your pocket.</div>
</div>
</div>
</div>

<div id="rightPart">
<div id="right">
</div>
<div id="rt">
<form name="f1" action="index2.php" method="POST" onsubmit="doChk()">
<?php
$unam=$_POST['uname'];
$pwd1=$_POST['pwd'];
$uid=$_POST['uid'];
$x=rand(1000,9999);


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);
$sql="insert into captcha(no,uid) values($x,$uid)";
$result=mysql_query($sql,$con);

$sql1="select * from user_table where uid='$uid'";
$result1=mysql_query($sql1,$con); 
  echo "<table>";
 if($result1) 
{ $row=mysql_fetch_array($result1);
  
  $a=$row['uname'];
  $b=$row['pwd'];
  $c=$row['email'];
  $d=$row['phone'];
  $e=$row['utype'];
  $f=$row['uid'];

  echo "<tr>";
  echo "<td>Name :</td>";
  echo "<td><input readonly type='text' name='uname' value='$unam' id='text'></td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td>User ID :</td>";
  echo "<td><input readonly type='text' name='uid' value='$f' id='text'></td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td>Pasword:</td>";
  echo "<td><input readonly type='text' name='pwd' value='$pwd1' id='text'></td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td>Email:</td>";
  echo "<td><input readonly type='text' name='email' value='$c' id='text'></td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td>Phone:</td>";
  echo "<td><input readonly type='text' name='phone' value='$d' id='text'></td>";
  echo "</tr>";

echo "<tr>";
  echo "<td>Usertye:</td>";
  echo "<td><input readonly type='text' name='utype' value='$e' id='text'></td>";
  echo "</tr>";

 echo "<tr>";
  echo "<td><br> Captcha : $x</td>";
  echo "<td><input type='text' name='no' id='text' placeholder='Enter Captcha'></td>";
 echo "<tr>";

 echo "<tr>";
  echo "<td colspan=2 id='bt'><input type='submit' id='btn' value='Submit' action='index2.php'></td>";
echo "</tr>";

  
  echo "</form>";
  
  echo "</table>";
}
else
    
    {echo "<br>";
    
    echo "<h4>Login Failed</h4>";
    echo "<h2><div id='dd'><a href='index1.php'>Go to Login Page</a></h2>";
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

