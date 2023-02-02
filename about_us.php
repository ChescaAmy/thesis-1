<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8"> 
        <title>About Us</title>
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
            .three{
                display:flex;
            }
            .three > div{
                flex: 1;
            }
            .mission, .vision{
                margin-left:150px;
                margin-right:150px;
                background:lightgray;
            }
        </style>
    </head>
    <body>
        <div class="one">
            <a href="home.php" style="font-size:20px; font-weight:70px; text-decoration:none; color:black;">Estillore Medical Clinic</a>
        </div>
        <div class="two">
            <div class="redirects">
                <a href="about_us.php" style="font-size:20px; font-weight:50px; text-decoration:none;"><h2>About Us</h2></a>
                <a href="login.php" style="font-size:20px; font-weight:50px; text-decoration:none;"><h2>Log-In</h2></a>
            </div>
        </div>    
        <div class="three">
            <div class="mission" style="font-size:30px; font-weight:150px; text-align:center; padding: 20px;">
                <p>Our mission is to improve the health and well-being of the people we serve by ensuring highly effective, community-based support and care.</p>
            </div>
            <div class="vision" style="font-size:30px; font-weight:150px; text-align:center; padding: 20px;">
                <p>To inspire hope and contribute to health and well-being by providing the best care to every patient through integrated clinical practice, education and research.</p>
            </div>
        </div>
    </body>
</html>