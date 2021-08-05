<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<script>
  function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["email"].value;
    var z = document.forms["myForm"]["year"].value;
    var a = document.forms["myForm"]["branch"].value;
    var b = document.forms["myForm"]["company"].value;
    var c = document.forms["myForm"]["questions"].value;
    if (x == "" || y == "" || z == "" || a == "" || b == "" || c == "") {
      alert("INCOMPLETE FORM !!!!!!!");
      return false;
    }
    else
    {
      alert("The form was submitted");
    }
   
  }
  </script>




<html lang="en">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

    <!-- Required meta tags -->
  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>

    <style>
        
     
            
@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

.navbar-icon-top .navbar-nav .nav-link > .fa {
  position: relative;
  width: 36px;
  font-size: 24px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  font-size: 0.75rem;
  position: absolute;
  right: 0;
  font-family: sans-serif;
}

.navbar-icon-top .navbar-nav .nav-link > .fa {
  top: 3px;
  line-height: 12px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  top: -10px;
}

@media (min-width: 576px) {
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 768px) {
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 992px) {
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 1200px) {
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}
body{
    background-image: url('./him.png');
    background-repeat: no-repeat;
    background-size: cover;
    
}
@media (min-width: 1200px) {
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}
body{
  font-family: 'Lexend', sans-serif;
  background-image: url('https://thumbs.dreamstime.com/b/cloud-storage-digital-technology-internet-network-background-sytem-hologram-link-working-web-things-data-machine-deep-learning-170591230.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

input {
  box-sizing: border-box;
} 

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


        
    </style>
</head>

<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <!--<a class="navbar-brand" href="#">Navbar</a>!-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
         <!---- <i class="fa fa-home"></i>!-->
              <img src="https://www.india-itme.com/images/supporting-institutes/Dkte-logo.jpg" style="width:100px;height:60px;">
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="./datas.php">
          <i class="	fa fa-address-card">
            <span class="badge badge-warning"></span>
          </i>
          Student Responses
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./facultyresponse.php">
          <i class="	fa fa-address-card">
            <span class="badge badge-warning">1</span>
          </i>
          Notifications
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./changepassword1.php">
          <i class="		fa fa-address-card">
            <span class="badge badge-warning"></span>
          </i>
          Change Password
        </a>
      </li>
    </ul>


     <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-circle" style="font-size:36px;color: red;">
            <span class="badge badge-info"></span>
            
          </i>
         <a href = "logout.php" tite = "Logout"><button>LogOut</button>
        </a>
      </li>
      
    </ul>  

   
<!----    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>!-->
</nav> 

    <center>
      <h1 style="color:white;">STUDENT REGISTRATION</h1>
        <div class="container">

            <form action="index45.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm" >
                <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Your name.."pattern="[a-zA-Z0-9]+" minlength="4" maxlength="15" />
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-25">
                        <label for="year">Year Of Passing</label>
                    </div>
                    <div class="col-75">
                         <select id="year" name="year">
                            <option label="">2022</option>
                            <option label="">2021</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="branch">Branch</label>
                    </div>
                    <div class="col-75">
                        <select id="branch" name="branch">
                            <option label="">CSE</option>
                            <option label="IT">IT</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="company">Visiting Comapny </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="company" name="company" placeholder="Comapny name.." pattern="[A-z]{2,12}" title="2 to 12 lowercase letters"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="questions">Quetions In Interview</label>
                    </div>
                    <div class="col-75">
                        <textarea id="questions" name="questions" placeholder="Write something.."
                            style="height:200px"  pattern="[a-z]{10,100}" title="10 to 100 lowercase letters"></textarea>
                    </div>
                </div>      
       
        <div class="row" >
            <div class="col-25">
            <label for="exampleFormControlInput1" class="form-label">
                Select file
            </label>    
            </div>
            <div class="col-75">
           <!-- <p><span style="color:black;">Note: File size should be less than 5 MB</span></p>  !-->
            <input type="file" class="form-control" name="image" id="image" >
            </div>
        </div>
        <div>
          <input class="btn btn-primary" type="submit" value="submit" name="submit" style="margin-top:-15px;">
        </div>
        <!-- <button style=" background-color:#0d6efd; margin-left:15px"
            onclick="window.location.href='profile1.html'">Dashboard</button> -->

    </form>
      

    </center>
    
</body>

</html>

<?php

    if(isset($_POST['submit']))
    {  
        $name=$_POST['name'];
    // $email=$_POST['email'];
     $year=$_POST['year'];
     $branch=$_POST['branch'];
     $company=$_POST['company'];
     $questions=$_POST['questions'];
        
        // $class = $_POST['class'];

        // $dept = $_POST['department'];

        // $type = $class."-".$dept;


        $conn = mysqli_connect ('localhost', 'root', '', 'dkte') or die(mysqli_error());


            $allow_ext = array('png','jpg','jepg');
           
            $imgname = $_FILES['image']['name'];//storing file name
            $temp_pdf_name = $_FILES['image']['tmp_name'];//temp name store



            $file_ext = pathinfo($imgname, PATHINFO_EXTENSION);

            if(!in_array($file_ext, $allow_ext))
            {
               // echo '<script> alert("only png , jpg , jepg , pdf , zip files are allowed");
                //window.location = "index45.php";
                //</script>';

                echo '<script> alert("PLEASE FILL THE GIVEN FIELDS");
                window.location = "index45.php";
                </script>';
            }

            else if ($_FILES["image"]["size"] > 5000000) 
            {
                echo '<script> alert("Sorry, your file size is too large!!! file size should be less than 5 MB");
                window.location = "index45.php";
                </script>';

              }

             
            else if(file_exists("aniket/".$_FILES['image']['name']))
            {
                $imgname = $_FILES['image']['name'];
                echo '<script> alert("This file is already exists!!! Change the file name and try again");
                window.location = "index45.php";
                </script>';
            }

            else
            {

            $sql = "INSERT INTO `studentdata`(`name`, `year`, `branch`, `company`, `questions`, `image`) VALUES (' $name',$year,'$branch','$company','$questions','$imgname')";
            $run = mysqli_query($conn, $sql);
            if($run)
              {
                move_uploaded_file( $temp_pdf_name, "aniket/$imgname");

                   echo '<script> alert("File uploaded successfully");
                         window.location = "index45.php";
                         </script>';


                   $conn->close();
            }
        }

        
    }







?>
</body>
</html>