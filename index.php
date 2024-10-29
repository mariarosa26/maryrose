<?php
    session_start();

    include("config.php");

if(isset($_POST['submit'])){
    $IdNumber = mysqli_real_escape_string($con, $_POST['IdNumber']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    $stmt = mysqli_prepare($con, "SELECT * FROM users WHERE IdNumber=? AND Password=?");
    mysqli_stmt_bind_param($stmt, "ss", $IdNumber, $Password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if(is_array($row) && !empty($row)){
        // Correct credentials, set session variables
        $_SESSION['valid'] = $row['IdNumber'];
        $_SESSION['Password'] = $row['Password'];
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Course'] = $row['Course'];
        $_SESSION['YearLevel'] = $row['YearLevel'];
        $_SESSION['usertype'] = $row['usertype'];

        if($row["usertype"]=="user"){
            header("location:it1.php") ;
        }
        elseif($row["usertype"]=="admin"){
            header("location:admin/home.php") ;
        }
    } else {
        // Incorrect credentials
        echo "<a href='index.php'><button class='btn'>X</button>";
        echo "<div class='message'>
            <h1>Wrong Username or Password!</h1>
        </div> <br>";
        }}
?>
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>USTP E-voting System</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "index.css" />
    </head>
<body>
<section>
    <img src="img/bg.jpg" class="bg">
    <div class="login">
            <h2>Welcome!</h2>
            <form action="" method="POST">
                <div class="inputBox">
                    <label for="IdNumber">Username</label>
                    <input type="text" name="IdNumber" id="IdNumber" placeholder="username" required>
                </div>

                <div class="inputBox">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" placeholder="password" required>
                </div>

                <div class = "fp">
                    <a href= "#">Forget Password</a></div>

                <div class="inputBox">
                    <input type="submit" name="submit" value="Login" id="btn" required>
                </div>
</form>
</div>
</section> 
</body>

</html>