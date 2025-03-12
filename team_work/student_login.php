<!DOCTYPE html>
<html>
	<head>
		<title>Student Portal</title>
        <link rel="stylesheet" href="CSS/index.css">
    </head>
<body>
    <div class="banner">
        <h1>Student Login</h1>
    </div>
    <div class="login-div">
        <form class="content-form" action="student_login.php" method="POST">
            <input type="text" name="regno" placeholder="REGISTER NUMBER">
            <input type="password" name="password" placeholder="PASSWORD">
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            if(!empty($_POST["regno"]) && !empty($_POST["password"]) )
            {
                echo "<script>alert('hello!');</script>";
            }
            
        }

    ?>
</body>
</html>
