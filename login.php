<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8"/>
        <title>Log-In</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <?php
            require('db.php');
            session_start();
            // When form submitted, check and create user session.
            if (isset($_POST['username'])) {
                $username = stripslashes($_REQUEST['username']);    // removes backslashes
                $username = mysqli_real_escape_string($con, $username);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                // Check user is exist in the database
                $query    = "SELECT * FROM `patient_account` WHERE username='$username'
                            AND password='" . md5($password) . "'";
                $result = mysqli_query($con, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                if ($rows == 1) {
                    $_SESSION['username'] = $username;
                    // Redirect to user dashboard page
                    header("Location: dashboard.php");
                } else {
                    echo "<div class='form'>
                        <h3>Incorrect Username/password.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                        </div>";
                }
            } else {
        ?>
        <div class="one">
            <a href="home.php" style="font-size:20px; font-weight:70px; text-decoration:none; color:black;">Estillore Medical Clinic</a>
        </div>
        <div class="two">
            <div class="redirects">
                <a href="about_us.php" style="font-size:20px; font-weight:50px; text-decoration:none;"><h2>About Us</h2></a>
                <a href="login.php" style="font-size:20px; font-weight:50px; text-decoration:none;"><h2>Log-In</h2></a>
            </div>
        </div>  
        <form class="form" method="post" name="login">
            <h1 class="login-title">Log-In</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
            <p class="link"><a href="register.php">New Registration</a></p>
        </form>
        <?php
            }
        ?>
    </body>
</html>