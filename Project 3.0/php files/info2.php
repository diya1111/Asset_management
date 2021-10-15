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
    }

td{
     color:rgb(95,134,192);
      font-family:verdana;
      font-size:15px;
}
#btn{
       background:linear-gradient(white,rgb(95,134,192));
       color:#281e5d;
      font-family:verdana;
      font-size:15px;
      height:90px;
      width:120px;
      border-radius:8px;
      font-weight: bold;
    }
 #text    {
             border-radius:5px;
            border:1px solid blue;
             width:180px;
            height:20px;
}
#rt{
    padding-top:50px;
    padding-left:120px;
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
  color:white;
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
#new{
   padding-top:65px;
   height:220;
   width:500;
   text-align:center;
}
#p{
  text-align:justify;
  width:400;
  height:300;
  padding-left: 10px;
}
h1{
  color:#5dbb63;
}
p{
  font-family:Book Antiqua;
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
  <div id="new">
<div id="p"><input type="button" value="Call" id="btn">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="button" value="Query" id="btn"></div>
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

