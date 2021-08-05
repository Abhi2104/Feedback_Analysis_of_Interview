<?php 
 $conn = mysqli_connect ('localhost', 'root', '', 'aniket') or die(mysqli_error());

if(isset($_POST['btnsubmit']))
{
    
   
    
    $password=$_POST['password'];
 
    $newpassword=$_POST['newpassword'];      
    
    $confirmpassword=$_POST['confirmpassword']; 


  
        $sql = "UPDATE `login_user1` SET `password`='$newpassword' WHERE `password`='$password'";


  
    $result = $conn->query($sql);
    if($result)
    {
        if($_POST['newpassword'] ==$_POST['confirmpassword'])
        {
            echo '<script> alert("Password Changed successfully");
            window.location = "index45.php";
            </script>';
        } 
        else
       
        
            echo '<script> alert("reconfirm Password");
            window.location = "changepassword1.php";
            </script>';
       
    }
   
    
    

}

?>

<html>
<head>
<title>User Login</title>
<script>
  function validateForm() {
    var x = document.forms["myForm"]["password"].value;
    var y = document.forms["myForm"]["newpassword"].value;
    var z = document.forms["myForm"]["confirmpassword"].value;
   
    if (x == "" || y == "" || z == "") {
      alert("PLEASE FILL THE REQUIRED FILEDS !!!!!!!");
      return false;
    }
    
   
  }
  </script>
<style>     
     body{
            background-image: url('./bg-back.jpg');
        }
   * {     
        margin:0; 
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif; 
        transition: all .2s linear;
}
/*form*/
.form-container {
    min-height: 100vh; 
    width: 100vw; 
    display: flex;
    align-items: center; 
    justify-content: center; 
    background-size: cover; 
    background-position: center;
    perspective: 1000px; 
 
} 
.form-container form{ 
    height:450px; 
    width:350px; 
    background: rgba(255,255,255,.1); 
    text-align: center;
    align-items: center;
    border-radius: 5px;
    box-shadow: 0 5px 15px rgba(0,0,0,.3);
    border-top: 1px solid rgba(255,255,255,.3);
    border-left: 1px solid rgba(255,255,255,.3);    
    backdrop-filter: blur(10px);
    transform-style: preserve-3d; 
}
/*heading*/
.form-container form h3{ 
    font-size: 30px; 
    padding:30px 0; 
    color:#ccc; 
    letter-spacing: 3px; 
} 
/*icon*/
.form-container form i{     
    padding:0.5px; 
    font-size: 20px; 
    color:#bbb;

} 
/*Login*/
.form-container form input {     
    outline: none; 
    border: none; 
    height:40px;
    width: 82%;
    background: rgba(0,0,0,.1);
    color: rgba(255,255,255,.7);
    box-shadow: 0 0 5px rgba(0,0,0,.5) inset;
    font-size: 17px;
    padding: 0 10px;
    margin: 15px 0;
    letter-spacing: 1px;
    border-radius: 15px;
} 
/*Login*/
.form-container form input[type="submit"] 
{ 
    width:90%; 
    cursor: pointer; 
    background:linear-gradient(90deg, deeppink, blueviolet); 
    margin-top: 30px; 
    border-radius: 50px; 
} 
.form-container form input[type="submit"]:hover 
{ 
    letter-spacing: 4px; 
}        
.container {
    display: block;
}
.icon{
    margin-right: 8px;
}
body{
    background-image:url('https://image.freepik.com/free-vector/dark-abstract-background-with-dark-blue-overlap-layers_103167-130.jpg');
    background-size:cover;
    background-repeat:no-repeat;
}

    </style>
</head>
<body>
<!--<form name="frmUser"  method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body> !-->






<div class="form-container">
<form   method="post" action="./changepassword2.php" onsubmit="return validateForm()" name="myForm" >

<h3>Change Password</h3>
<div class="container">
<span class="icon"><i class="fas fa-at"></i></span>
<input type="password" placeholder="current password" name="password"/>
</div>  


<!-- <div class="container">
<span class="icon"><i class="fas fa-lock"></i></span>
<input type="password" placeholder="oldpassword" name="password"/>
</div>  !-->

<div class="container">
<span class="icon"><i class="fas fa-lock"></i></span>
<input type="password" placeholder="newpassword" name="newpassword"/>
</div>


<div class="container">
<span class="icon"><i class="fas fa-lock"></i></span>
<input type="password" placeholder="confirmpassword" name="confirmpassword"/>
</div> 


<input type="submit" value="Submit" name="btnsubmit">
</form>

</div>

<script> 

var form = document.getElementById('form'); 
form.addEventListener('mousemove', (e) =>{ 

var x = (window.innerWidth / 2 - e.pageX) / 12;  ; 
var y = (window.innerHeight / 2 - e.pageY) / 12;
form.style.transform = 'rotateX(' + x + 'deg) rotateY(' + y + 'deg)';

}); 

form.addEventListener('mouseleave', function(){
form.style.transform = 'rotateX(0deg) rotateY(0deg)';

});















</html>