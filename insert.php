
		<?php

		// define variables and set to empty values
        $nameErr="";
        $first_name = "";
         require_once "config.php";
		// Taking all 5 values from the form data(input)
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
		// $first_name = $_POST['first_name'];
		if (empty($_POST["first_name"])){
			$nameErr = "Name is required";
		  } 
		  else 
		  {
			$first_name = test_input($_POST["first_name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
			  $nameErr = "Only letters and white space allowed";
			}
		  }
		$last_name = $_POST['last_name'];
		$mobile = $_POST['number'];
		$State=$_POST['state'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO tractor(`first_name`, `last_name`, `mobile`, `State`, `Address`, `Email`)  VALUES ('$first_name','$last_name','$mobile','$State','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong> You have registered Sucessfully.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	  }
		?>
		 <!DOCTYPE html>
		 <html lang="en">
		 <head>
			 <meta charset="UTF-8">
			 <meta http-equiv="X-UA-Compatible" content="IE=edge">
			 <meta name="viewport" content="width=device-width, initial-scale=1.0">
			 <meta http-equiv="refresh" content="5;url=farm.html">
			 <title>Registration Page</title>
			  <!-- Bootstrap CSS -->
			  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		 </head>
		 <body>
			 
		 </body>
		 </html>