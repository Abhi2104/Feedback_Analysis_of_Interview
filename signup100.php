<?php 
  //$db = mysqli_connect('localhost', 'root', '', 'student');
  $db = new mysqli("localhost","root","","aniket");
  if ($db->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  //$username = "";
  //$email = "";
  if (isset($_POST['btnSubmit'])) 
  {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $id=$_POST["id"];
   
    $sql2 = "SELECT * FROM login_user1 ";
   	    $sql = "SELECT * FROM login_user1 where user_name='$user_name' or email='$email'";
           if($user_name=="" ||  $email==""){$sql=$sql2;}
	  $result = mysqli_query($db, $sql);
    $row_count= mysqli_num_rows($result);
     
      if( mysqli_num_rows($result)>0)
      {
        $row = mysqli_fetch_assoc($result);
        if($email==isset($row['email']) || $user_name==isset($row['user_name']))
        {
          echo '<script> alert("USERNAME Or EMAIL ALREADY EXISTS");
          window.location = "signup100.php";
          </script>';
         }
        }
    else
    {
           $query ="INSERT INTO `login_user1`(`id`, `user_name`, `email`, `password`) VALUES (' $id','$user_name','$email','$password')";
           $run = mysqli_query($db, $query);
           echo '<script> alert("SIGNUP SUCCESS");
           window.location = "indexF.html";
           </script>';
           exit();
    	}
    
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script>
  function validateForm() 
  {
    var x = document.forms["myForm"]["user_name"].value;
    var y = document.forms["myForm"]["id"].value;
    var z = document.forms["myForm"]["email"].value;
    var a = document.forms["myForm"]["password"].value;
   
    if (x == "" || y == "" || z == "" || a == "" ) {
      alert("INCOMPLETE FORM !!!!!!!");
      return false;
    }
    
    
  
}
  </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
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
    /*background: url(bg-back.jpg) no-repeat; */
    background-size: cover; 
    background-position: center;
    perspective: 1000px; 
 
} 
.form-container form{ 
    height:500px; 
    width:360px; 
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
    background-image: url('https://wallpaperaccess.com/full/253796.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
    <title>Document</title>
</head>
<body>
<div class="form-container">
<form name="myForm" action="./signup100.php" id="form"  onsubmit="return validateForm()" method="post" >
<h3>Sign In</h3>
<class class="container">
<span class="icon"><i class="fas fa-user"></i></span>
<input type="text" placeholder="username" name="user_name"  pattern="[a-zA-Z0-9]+" minlength="4" maxlength="15"/>


<div class="container">
<span class="icon"><i class="fas fa-address-book"></i></span>
<input type="text" placeholder="id" name="id" pattern="[0-9]{2,3}" required/>
</div>


<div class="container">
<span class="icon"><i class="fas fa-at"></i></span>
<input type="email" placeholder="email" name="email" />
</div>


<div class="container">
<span class="icon"><i class="fas fa-lock"></i></span>
<input type="password" placeholder="password" name="password"/>
</div>
<input type="submit" value="SignIn"  name="btnSubmit" >
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

</script> 

</body>
</html>