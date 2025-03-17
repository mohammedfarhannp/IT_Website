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
	            <input type="text" name="regno" placeholder="REGISTER NUMBER">
	            <input type="password" name="password" placeholder="PASSWORD">
	            <button type="submit">Submit</button>
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
			$regno=$_POST["regno"];
			$password=$_POST["password"];

			$db = "IT_Dept";
			$user ="root";
			$pass="";
			$server = "localhost";
			$conn = new mysqli($server,$user,$pass,$db);
			if($conn->connect_error)
			{
				die($conn->connect_error);
			}
			$query="select * from AUTH where REGISTER_NUMBER = '$regno'";
			$result=$conn->query($query);


			// Error due to $result being an array of rows
			// echo "<script>alert(" . $result["PASSWORD_ENCRYPTED"] . ")</script>";
            
			// Corrected
			$row = $result->fetch_assoc();
			echo "<script>alert('" . $row["PASSWORD_ENCRYPTED"] . "')</script>";
		} 
		           
    }
?>
	</body>
</html>
