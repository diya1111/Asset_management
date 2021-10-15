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
      font-family:tahoma;
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
  color:rgb(95,134,192);
  font-family:verdana;
  font-size:12px;
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
    color:brown;
}
             </style>
<script>
function doChk()
{        
var uname=document.f1.uname.value;
var pwd=document.f1.pwd.value;
var pLen=pwd.length;

if(uname =="" || pwd =="")
{
alert("Field is blank");
return false;
}
else if(pLen < 4)
  {
alert("Password should be of 4 chars");
}
else{
 alert("verification not done");
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
<form name="f1" action="captcha.php" method="POST" onsubmit="doChk()">
<table>
  
  <tr>
   <th colspan=2>Login Details </th>
</tr>

<tr>
 
   <td><input type="text" id="text" name="uname" placeholder="Enter name"></td>
</tr>
 
  <tr><td><input type="text" id="text" name="uid" placeholder="Enter ID"></td></tr>

<tr>
  
  <td><input type="text" id="text" name="pwd" placeholder="Enter Password"> </td>
</tr>

<tr>
  
  <td><select id="text" name="utype" placeholder="Enter usertype">
      <option></option>
    <?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);
$sql="select distinct utype from user_table";
$result=mysql_query($sql,$con); 
while($row=mysql_fetch_array($result))
{
$d=$row['utype'];
echo "<option value='$d'>$d</option>";
}
?></td>
</tr>

 <!-- <?php
echo "<tr>";
$sql="SELECT uid FROM user_table";
$result=mysql_query($sql,$con); 
while($row=mysql_fetch_array($result))
{
  $uid=$row['uid'];}
  //echo "<td>  ".$uid."</td>";
  echo "<td><h3><a href='captcha.php?uid=$uid'id='td'>For Verification?</a></td>";
echo "</tr>";
?>  -->
<tr>
  <td colspan=2 id='bt'><input type="submit" id="btn" value="Submit" action="captcha.php"></td>
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

