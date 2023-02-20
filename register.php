<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Registration</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <?php
            require('db.php');
            // When form submitted, insert values into the database.
            if (isset($_REQUEST['username'])) {
                $first_name    = stripslashes($_REQUEST['first_name']);
                $first_name    = mysqli_real_escape_string($con, $first_name);
                $last_name    = stripslashes($_REQUEST['last_name']);
                $last_name    = mysqli_real_escape_string($con, $last_name);
                $middle_initial    = stripslashes($_REQUEST['middle_initial']);
                $middle_initial    = mysqli_real_escape_string($con, $middle_initial);
                // removes backslashes
                $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
                $username = mysqli_real_escape_string($con, $username);
                $dob = date('Y-m-d', strtotime($_REQUEST['dateofbirth']));
                $email    = stripslashes($_REQUEST['email']);
                $email    = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                $create_datetime = date("Y-m-d H:i:s");
                $query    = "INSERT into `patient_account` (first_name, last_name, middle_initial, username, dob, password, email, create_datetime)
                            VALUES ('$first_name','$last_name','$middle_initial','$username', '$dob', '" . md5($password) . "', '$email', '$create_datetime')";
                $result   = mysqli_query($con, $query);
                if ($result) {
                    echo "<div class='form'>
                        <h3>You are registered successfully.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a></p>
                        </div>";
                } else {
                    echo "<div class='form'>
                        <h3>Required fields are missing.</h3><br/>
                        <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                        </div>";
                }
            } else {
        ?>
        <div class="one">
            <a href="home.php" style="font-size:20px; font-weight:70px; text-decoration:none; color:black;">Estillore Medical Clinic</a>
        </div>
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="first_name" placeholder="First Name" required />
            <input type="text" class="login-input" name="last_name" placeholder="Last Name" required />
            <input type="text" class="login-input" name="middle_initial" placeholder="Middle Initial"/>
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <label style="color:#464646;">Enter your birthday:</label>
            <input type="date" name="dateofbirth"><br><br>
            <input type="text" class="login-input" name="email" placeholder="Email Adress">
            <input type="password" class="login-input" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="login.php">Click to Login</a></p>
        </form>
        <?php
            }
        ?>
    </body>
</html>