
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>7topics - Login Demo</title>
 <style>
 body,li,ul{
 margin:0px auto;
}
body{
    font-family: 'Lexend', sans-serif;
    background-image:url('https://assets-global.website-files.com/5e39e095596498a8b9624af1/5f6e93d250a6d04f4eae9f02_Backgrounds-WFU-thumbnail-(size).jpg');
 background-repeat: no-repeat;
    background-size: cover;
 width:100%;
 font-family:sans-serif;
}
header{
 background-color:#fff;
 width:100%;
 height:55px;
 margin:0px;
}
nav{
 width:100%;
 border-top:5px solid #3498DB;
}
nav ul{
 float:inherit; 
 border-left:6px solid #BDC3C7;
 height:50px;
}
nav a{
 text-decoration:none;
 color:#3498DB;
 padding:10px;
 width:auto;
 font-size:30px;
 font-weight:bold;
 border-right:1px solid #BDC3C7;
 font-family:Gabriola;
 height:50px;
}
nav a:hover{
 color:#fff;
 background-color:#3498DB;
 transition:1s;
}
nav li{
 margin:0;
 padding:0;
 list-style:none;
 float:left;
}

#center{
 margin:0px auto;
 width:95%;
}
#center-set{
 float:left;
 width:100%;
 padding-top:1%;
 padding-bottom:0.5%;
 background-color:#A2DED0;
 border-top:5px solid #3498DB;
}
#signup{
 float:left;
 width:50%;
}
#signup-st,#login-st{
 background-color:#22313F;
 margin:50px;
 border-radius:20px;
 -webkit-box-shadow: 3px 3px 4px 0px rgba(0,0,0,0.85);
}
#reg{
 padding-top:10px;
}
#reg-head,#reg-bottom,#reg-head-fail{
 width:100%;
 text-align:center;
 background-color:#fff;
 font-weight:bold;
}
.headrg{
 border-top-left-radius:20px;
 border-top-right-radius:20px;
 padding-top:12px;
 padding-bottom:12px;
 font-size:22px;
 color:#6C7A89;
}
.btmrg{
 padding-top:5px;
 padding-bottom:5px;
 border-bottom-left-radius:20px;
 border-bottom-right-radius:20px;
 font-size:18px;
 color:#22313F;
}
#reg-head-fail{
 color:#D35400;
}
#reg-head:hover{
 color:#3498DB;
 transition:1s;
}
#tb-name{
 float:right;
 font-size:20px;
}
#tb-box{
 height:22px;
 width:200px;
}
#st{
 width:100%;
 text-align:center;
 padding-top:30px;
 padding-bottom:10px;
}
#st-btn{
 text-align:center;
 padding:10px 21px 10px 21px;
 background-color:#3498DB;
 border:none;
 color:#fff;
 cursor:pointer;
 font-size:20px;
 font-weight:bold;
}
#st-btn:hover{
 color:#3498DB;
 background:#fff;
 transition:1s;
}
td.t-1{
 float:left;
 width:44%;
 text-align:right;
 color:#C5EFF7;
}
td.t-2{
 float:right;
 width:55%;
}
#lg-1{
 padding:10px;
 float:left;
 width:95%;
}
.tl-1{
 float:left;
 width:40%;
 padding-right:5%;
 text-align:center;
 color:#C5EFF7;
}
.tl-4{
 font-size:17px;
 font-weight:bold;
 text-align:center;
 color:#FDE3A7;
}
#login{
 float:right;
 width:50%;
}
#login-sg{
 margin-top:20%;
}
#footer{
 background-color:#fff;
 width:100%;
 height:50px;
 margin:0px;
 float:left;
 border-top:5px solid #3498DB;
}
#footer p{
 text-align:center;
 font-size:18px;
 font-weight:bold;
 color:#3498DB;
}</style>
</head>
<body>

<div id="center">

<div id="contentbox">
<?php
$con=new mysqli("localhost","root","","student");
if($con->connect_error)
{
    die("Error in connection".$con->connect_error);
}
$sql="SELECT * FROM facultydata ";
$result=mysqli_query($con,$sql);
?>
<center><h1>NOTIFICATIONS</h1></center>
<?php


while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">

<div id="signup-st">

<form action="" method="POST" id="signin" id="reg"> 
<div id="reg-head" class="headrg">New Notification</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">





<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">COMPANY NAME:</div></td>
<td class="tl-4"><?php echo $rows['company']; ?></td>
</tr> 


<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">VISTING DATE:</div></td>
<td class="tl-4"><?php echo $rows['date']; ?></td>
</tr>
</table>

</form>
</div>
</div>

<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>

</body>
</html>