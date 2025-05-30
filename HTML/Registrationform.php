<?php
require('../PHP/Registrationconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminRegister</title>
    <link rel="stylesheet" href="Resourses/stylesheet/style.css">
</head>
<body>
    <div class="container">

        <div class="left">

        </div>

        <div class="right">

            <center>
                <form class="loginform" action="" method="POST">    

                    
                    <br>
                    <div class="login">
                        <div style="margin-top:10%;">
                        <label for="name" class="label">Email</label>
                        </div>
                        <input class="name" id="email" type="email" name="email" placeholder="@gmail.com" required />

                    </div>
                    
                    <div class="login">
                        <div style="margin-top:5%;">
                        <label for="name" class="label">FullName</label>
                        </div>
                        <input class="name" id="name" type="text" name="fullname" required />

                    </div>
                   
                   
                    <div class="login">
                        <div style="margin-top:5%;">
                        <label for="name" class="label">Username</label>
                        </div>
                        <input class="name" id="name" type="text" name="username" required />

                    </div>
                    <div class="login">
                        <div style="margin-top:5%;">
                        <label for="password" class="label">Password</label>
                        </div>
                        <input class="password" id="password" type="password" name="password" required />

                    </div>

                    <input type="submit" value="submit" class="button" name="register">

                    <div class="noaccount">
                        <p>Already have an account? <a href="index.php">  Sign in</a></p>
                    </div>
                  


                </form>


            </center>

        </div>


    </div>
</body>
</html>