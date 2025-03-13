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
            echo "<script>alert('hello!');</script>";
        }            
    }
?>
	</body>
</html>
