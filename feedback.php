

<!DOCTYPE html>
<html>

<head>
	<title>Sending file attachment with email</title>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
	<style>
		form {
			box-shadow: 10px 10px 40px grey;
			padding: 50px;
			margin: 20px;
		}
	</style>
</head>

<body>
	
	
	<form method="post" action="feedback.php"
			enctype="multipart/form-data"
			class="w-75 mx-auto">
		<h1 class="text-success text-center">
			ANSWERING SECTION
		</h1>
		
		
		<div class="form-group">
            <div class="col-25">
                        <label for="name">Name</label>
                    </div>
			<input type="text" name="name"
				class="form-control"
				placeholder="Name" required="">
		</div>

		<div class="form-group">
             <div class="col-25">
                        <label for="questions">Questions</label>
            </div>
			<textarea name="questions"
				class="form-control"
				placeholder="Write your questions here..."
				required="" style="height:190px;">
			</textarea>
		</div>



	
		
		
		<div class="form-group">
             <div class="col-25">
                        <label for="answer">Answer</label>
            </div>
			<textarea name="answer"
				class="form-control"
				placeholder="Write your message here..."
				required="" style="height:150px;">
			</textarea>
		</div>
		
	
		
		<div class="submit text-center">
			<input type="submit" name="submit"
				class="btn btn-success "
				value="SUBMIT">
		</div>
	</form>
</body>

</html>
<?php

    if(isset($_POST['submit']))
    {  
        $name=$_POST['name'];
 
     $questions=$_POST['questions'];
     $answer=$_POST['answer'];
        
        // $class = $_POST['class'];

        // $dept = $_POST['department'];

        // $type = $class."-".$dept;


        $conn = mysqli_connect ('localhost', 'root', '', 'feedback') or die(mysqli_error());



            $sql = "INSERT INTO `feedback`(`name`,`questions`, `answer`) VALUES (' $name','$questions','$answer')";
            $run = mysqli_query($conn, $sql);
            if($run)
              {
               

                   echo '<script> alert("Answer recorded successfully");
                         window.location = "datas.php";
                         </script>';


                   $conn->close();
            }

			$sql1 = "SELECT questions FROM feedback ";
			$result = mysqli_query($conn, $sql1);
			if (mysqli_num_rows($run) > 1) {
				echo '<script> alert("QUESTION ALREADY EXISTS");
			   
				</script>';
			  }
        

        
    }







?>