<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DOCUMENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
    <style>
        input[type=text], select, textarea {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
        body{
            font-family: 'Lexend', sans-serif;
  background-image: url('https://img.freepik.com/free-vector/3d-perspective-style-diamond-shape-white-background_1017-27556.jpg?size=626&ext=jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>

<body>
    <?php ?>
    <div class="container" style="margin-top: 30px">
        <form action="" method="post" enctype="multipart/form-data" name="myForm">
            <div class="row">
                    <div class="col-25 form-group">
                        <label for="year" style="padding: 5px;">QUESTIONS: </label>
                    </div>
                     <div class="col-75" style="margin-left: 20px">
                            <input class="form-control" type="text" id="questions" name="questions" placeholder="Questions to search" required>
                    </div>



                
                  
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="submit" name="submit" style="margin-top: 15px;" required>
            </div>

        </form>
        <?php 
    
$con =  mysqli_connect('localhost','root','','feedback'); 
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
    $questions="";
   // $answer="";
         if(isset($_POST["submit"])){
            $questions=$_POST['questions'];
           // $answer=$_POST['answer'];
         }
    ?>
        <table class="table table-striped table table-hover" style="margin-top: 30px">
            <thead  class="thead-dark">
                <tr>
                <th scope="col">NAME</th>
                    <th scope="col">QUESTIONS</th>
                    <th scope="col"> ANSWERS</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                <?php
            $con =  mysqli_connect('localhost','root','','feedback'); 
	       if ($con->connect_error) {
  		        die("Connection failed: " . $con->connect_error);
		  }
            
            $sql2 = "SELECT * FROM feedback ";
   	    $sql = "SELECT * FROM feedback where questions='$questions'";
            if($questions==""){$sql=$sql2;}
	   $run = mysqli_query($con, $sql);
       

	if (mysqli_num_rows($run) > 0) 
    {
         ?>
                    <?php
  	    while($row = mysqli_fetch_assoc($run)) 
        {
        ?>
                <tr class="table table-striped ">
                <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["questions"]; ?></td>
                    <td><?php echo $row["answer"]; ?></td>
                    
       
                </tr>
                <?php  
               
                  
  	    }
          
         
      
	} 
    else 
    {
        echo "<center><h3 style='color:red'>0 results</h3></center>";
	}
    $con->close();
    ?>
            </tbody>
        </table>
    </div>
</body>

</html>
