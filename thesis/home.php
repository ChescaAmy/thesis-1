<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8"> 
        <title>Home</title>
        <style>
            .one, .two, .three, .four{
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
                justify-content:center;
                margin-top:100px;
                margin-bottom:50px;
            }
            .title{
                background:gray;
                color:white;
                
            }
            .information{
                background:lightgray;
            }
            .four{
                display:flex;
                justify-content:center;  
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
            <div class="title" style="width: 300px; text-align:center; padding: 10px;">
                </br>
                <h1>Estillore Medical</h1>
                <h1>Clinic</h1>
            </div>
            <div class="information" style="font-size:20px; font-weight:50px; width: 700px;">
                <ul>
                    <li>Estillore Medical Clinic was founded by Elizabeth Macapagao-Estillore M.D., DFM in the year 1988.</li>
                    <li>The medical clinic is located at 70 Anahaw Street, Project 7, Quezon City Philippines, which operates during Monday to Friday, 8:00 am to 5:00 pm Philippine Time.</li>
                    <li>The one who operates and handles the physical clinic is her secretary RN. Mark Andy Dellomos.</li>
                </ul>
            </div>
        </div>
        <div class="four">
            <div style="width: 400px; height: 100px; margin-left:50px; margin-right:50px; margin-top:20px; text-align:center; background:lightgray;">
                <h3>Medical Clinic's Contact Information</h3>
                <a href="clinic_info.php"><h4>View More</h4></a>
            </div>
            <div style="width: 400px; height: 100px; margin-left:50px; margin-right:50px; margin-top:20px; text-align:center; background:lightgray;">
                <h3>Medical Clinic's Credentials</h3>
                <a href="credentials.php"><h4>View More</h4></a>
            </div>
        </div>
    </body>
</html>