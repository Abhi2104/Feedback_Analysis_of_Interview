<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show Books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
  background-image: url('https://w.wallpaperkiss.com/wimg/s/128-1281302_small.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
    </style>
</head>

<body>
    <?php ?>
    <div class="container" style="margin-top: 30px">
        <form action="" method="post" enctype="multipart/form-data" name="myForm">
        <div class="row">
                <div class="col-25 form-group">
                    <label for="year" style="padding: 5px;color:yellow;">YEAR : </label>
                </div>
                <div class="col-75" style="margin-left: 20px">
                        <select id="year" name="year">
                            <option label="">2022</option>
                            <option label="">2021</option>
                        </select>
                </div>
                
                <div class="col-25 form-group">
                        <label for="year" style="padding: 5px;color:yellow;">COMAPNY : </label>
                    </div>
                     <div class="col-75" style="margin-left: 20px">
                            <input class="form-control" type="text" id="company" name="company" placeholder="Year to search" required>
                    </div>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="submit" name="submit" style="margin-top: 15px;" required>
            </div>

        </form>
        <?php 
    
$con =  mysqli_connect('localhost','root','','dkte'); 
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
    $year="";
    $company="";
         if(isset($_POST["submit"])){
            $year=$_POST['year'];
            $company=$_POST['company'];
         }
    ?>
        <table class="table table-striped" style="margin-top: 50px">
            <thead  class="thead-dark">
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">YEAR</th>
                    <th scope="col">BRANCH</th>
                    <th scope="col">COMPANY</th>
                    <th scope="col">QUESTIONS</th>
                    <th scope="col">PROFILE IMAGE</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php
            $con =  mysqli_connect('localhost','root','','dkte'); 
	       if ($con->connect_error) {
  		        die("Connection failed: " . $con->connect_error);
		  }
            
            $sql2 = "SELECT * FROM studentdata ";
   	    $sql = "SELECT * FROM studentdata where year='$year'and company='$company'";
            if($year=="" && $company==""){$sql=$sql2;}
	   $run = mysqli_query($con, $sql);
       

	if (mysqli_num_rows($run) > 0) {
    ?>
                <?php
  	while($row = mysqli_fetch_assoc($run)) {
      ?>
                <tr class="table-light">
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["year"]; ?></td>
                    <td><?php echo $row["branch"]; ?></td>
                    <td><?php echo $row["company"]; ?></td>
                    <td><?php echo $row["questions"]; ?></td>
                     <td> <?php echo "<a href=\"aniket/$row[image]\">view</a>" ?></td> 
       
                </tr>
                <?php  
  	}
	} else {
        echo '<script> alert("RESULTS NOT FOUND");
           
        </script>';
	}
    $con->close();
    ?>
            </tbody>
        </table>
    </div>
</body>

</html>
