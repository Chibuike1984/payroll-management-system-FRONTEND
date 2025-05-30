<!DOCTYPE html>
<?php
 require ('../PHP/Loginconn.php');
 $R = SESSION_ID();
  //print ("<script>alert('Login successful!')</script>");

if(!isset($_SESSION['email'])) 
{
    header("Location: index.php");
    exit();
} 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="Resourses/stylesheet/styleee.css">

</head>
<body>
     <div class="homeDiv">
        <!--p>Welcome back Administrator</p--> 
            <?php
            print ("My Session ID is, ". $R);
            ?>
     </div>

</body>
</html>