<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8"/>
        <title>Log-In</title>
        <style>
            .one, .two{
                margin-top:5px;
                margin-bottom:5px;
            }
            .one{
                background:lightgray;
            }
            .two{
                text-align: center;
                margin-top:100px;
                margin-bottom:100px;
            }
            .redirects{
                display: flex;
            }
            .redirects > a{
                flex: 1;
                color: black;
                margin-left:10px;
                margin-right:10px;
                background:lightgray;
            }
            .form {
                margin: 50px auto;
                width: 300px;
                padding: 30px 25px;
                background: lightgray;
            }
            h1.login-title {
                color: black;
                margin: 0px auto 25px;
                font-size: 40px;
                font-weight: 300;
                text-align: center;
            }
            .login-input {
                font-size: 15px;
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 25px;
                height: 25px;
                width: calc(100% - 23px);
            }
            .login-input:focus {
                border-color:#6e8095;
                outline: none;
            }
            .login-button {
                color: white;
                background: darkgray;
                border: 0;
                outline: 0;
                width: 100%;
                height: 50px;
                font-size: 16px;
                text-align: center;
                cursor: pointer;
            }
            .link {
                color: #666;
                font-size: 15px;
                text-align: center;
                margin-bottom: 0px;
            }
            .link a {
                color: #666;
            }
            h3 {
                font-weight: normal;
                text-align: center;
            }
        </style>
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
                    header("Location: patient_dashboard.php");
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