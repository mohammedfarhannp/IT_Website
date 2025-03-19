<!-- COMMENTS BY MOHAMMED FARHAN N P -->
<!-- LOGIN PAGE FOR STUDENT PORTAL -->

<!-- DOCUMENT TYPE TAG FOR SPECIFYING DOCUMENT TYPE TO THE BROSWSER -->
<!DOCTYPE html>

<!-- HTML TAG -->
<html>
	
	<!-- HEAD TAG -->
	<head>
		<!-- TITLE TAG -->
		<title>Student Portal</title>
		<!-- EXTERNAL CSS FILE LINKED HERE -->
        	<link rel="stylesheet" href="CSS/index.css">
    	</head>

	<!-- BODY TAG -->
	<body>
		<!-- BANNER DIVISION -->
	   	<div class="banner">
	        <h1>Student Login</h1>
		</div>

		<!-- FORM DIVISION -->
	    <div class="login-div">
	        <!-- FORM TAG -->
			<form class="content-form" action="student_login.php" method="POST">
	            <input class="login-input" type="text" name="regno" placeholder="REGISTER NUMBER">
	            <input class="login-input" type="password" name="password" placeholder="PASSWORD">
	            <button class="btn" type="submit">Login</button>
	        </form>
	    </div>
		
<!-- PHP TAG FOR LOGIN CHECK -->
<?php
	// CHECKS IF THE REQUEST METHOD IS POST
   	if($_SERVER["REQUEST_METHOD"]==="POST")
	{
		// CHECKS IF THE FIELDS ARE EMPTY OR NOT
        if(!empty($_POST["regno"]) && !empty($_POST["password"]) )
        {
			// STUDENT LOGIN CREDENTIALS
			$regno=$_POST["regno"];
			$password=$_POST["password"];

			// DATABASE CREDENTIALS
			$db = "IT_Dept";
			$user ="root";
			$pass="";
			$server = "localhost";

			// MYSQL CONNECTION
			$conn = new mysqli($server,$user,$pass,$db);

			// CHECKS IF CONNECTION ERROR
			if($conn->connect_error)
			{
				die($conn->connect_error);
			}

			// QUERY AND EXECUTION OF QUERY IN MYSQL
			$query="select * from AUTH where REGISTER_NUMBER = '$regno'";
			$result=$conn->query($query);


			// Error due to $result being an array of rows
			// echo "<script>alert(" . $result["PASSWORD_ENCRYPTED"] . ")</script>";
            
			// Corrected Code

			// FETCH A ROW FROM RESULT OF SQL QUERY
			//$row = $result->fetch_assoc();

			// CHECK THE NUMBER OF ROWS
			if($result->num_rows== 1)
			{
				// RETRIVE THE FIRST ROW TO A VARIABLE
				$row=$result->fetch_assoc();

				// CHECK IF THE PASSWORD FROM USER INPUT MATCHES THE ENCRYPTED PASSWORD IN THE DATABASE
				if(password_verify($password,$row["PASSWORD_ENCRYPTED"]))
				{
					// DISPLAY 'SUCCESS'
					echo "<script> alert('Success')</script>";

					// TO DO - START SESSION, CREATE SESSION VARIABLE, (WHEN THIS PAGE LOADS, CHECK IF THE SESSION VARIABLE IS SET, IF YES THEN REDIRECT TO DASHBOARD)
				}
				// IF NOT MATCH THEN DISPLAY 'INVALID PASSWORD'
				else{
					echo "<script> alert('Invalid Password')</script>";
				}
			}
			// IF NUMBER OF ROWS IS NOT 1 THEN DISPLAY 'INVALID REGISTER NUMBER'
			else
			{
				echo "<script> alert('Invalid Register Number')</script>";
			}
		}
		// IF THE INPUT FIELDS ARE EMPTY THEN DISPLAY 'ENTER VALID REGISTER NUMBER AND PASSWORD'
		else 
		{
			echo "<script> alert('Enter a valid Register Number and Password')</script>";
		}           
    }
?>
	</body>
</html>
