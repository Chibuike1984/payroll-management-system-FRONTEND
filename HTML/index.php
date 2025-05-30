<?php
require ('../PHP/Loginconn.php');


//print ("<script>alert('Registration successful!')</script>");
              

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
    <link rel="stylesheet" href="Resourses/stylesheet/style.css">
</head>
<body>
    <div class="container">

        <div class="left">

        </div>

        <div class="right">

            <center>
                <form class="loginform" action="" method="POST">

                <!--div style="display:none;width:200px;height:40px;border:1px solid lightgrey;" >
                    <php
                    $error = $_GET["error"];
                    echo 'email and password incorrect';
                    ?-->
                   
                    
                    <br>
                    <div class="login">
                        <div style="margin-top:10%;">
                        <label for="name" class="label">Email</label>
                        </div>
                        <input class="name" id="name" type="email" name="email" placeholder="@gmail.com" required />

                    </div>
                    <div class="login">
                        <div style="margin-top:5%;">
                        <label for="password" class="label">Password</label>
                        </div>
                        <input class="password" id="password" type="password" name="password" required />

                    </div>

                    <input type="submit" value="login" class="button" name="login">

                    <div class="noaccount">
                        <p>Don't have an account? <a href="Registrationform.php">  Sign up</a></p>
                    </div>
                     


                </form>


            </center>

        </div>


    </div>
</body>
</html>