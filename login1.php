<!--<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','aniket') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user1 WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
            echo '<script>alert("INVALID USERNAME OR PASSWORD")</script>';
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:faculty.php");
    }
?> !-->
<html>
<head>
<script>
  function validateForm() {
    var x = document.forms["myForm"]["user_name"].value;
  
    var a = document.forms["myForm"]["password"].value;
   
    if (x == "" || a == "" ) {
      alert("PLEASE FILL REQUIRED FIELDS IN FORM !!!!!!!");
      return false;
    }
   
   
  }
  </script>
<title>User Login</title>
<style>
    
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
    /*background: url() no-repeat; */
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
    background-image: url('https://img.freepik.com/free-vector/blue-copy-space-digital-background_23-2148821698.jpg?size=626&ext=jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body>






<div class="form-container">
<form name="myForm"  method="post" action="" onsubmit="return validateForm()" >
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3>Login</h3>
<class class="container">
<span class="icon"><i class="fas fa-user"></i></span>
<input type="text" placeholder="email" name="email"/>

<div class="container">
<span class="icon"><i class="fas fa-lock"></i></span>
<input type="password" placeholder="password" name="password"/>
</div>
<input type="submit" value="Submit">
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