<!DOCTYPE html>
<?php
 require ('../PHP/Loginconn.php');
 $R = SESSION_ID();

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
    <title>ManagementPage</title>
    <script type="text/javascript" src="resourses/jquery/jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="Resourses/stylesheet/stylee.css">

</head>
<body>


    <div>
        <div class="header">
            <a href="">Recruitment Management System</a>
            <a href="" class="left"><span class="fa fa-user-circle"></span> <?php 
               print ("welcome, ". $_SESSION['email']);
                 ?></a>
        </div>

        <div class="bodycontent">
            <div class="body1">
                
             <a href="#" style="margin-top:55px;" id="home"><span class="fa fa-home" ></span> Home</a>
             <a href="#"  id="attendance"><span class="fa fa-list-ul"></span> Attendance</a>
             <a href="#"  id="payroll"><span class="fa fa-columns"></span> Payroll List</a>
             <a href="#"  id="employee"><span class="fa fa-user-tie"></span> Employee List</a>
             <a href="#"  id="department"><span class="fa fa-columns"></span> Department List</a>
             <a href="#"  id="position"><span class="fa fa-user-tie"></span> Position List</a>
             <a href="#"  id="allowance"><span class="fa fa-list-ul"></span> Allowance List</a>
             <a href="#"  id="deduction"><span class="fa fa-money-bill-wave"></span> Deduction List</a>
             <!-- <a href=""  id="users"><span class="fa fa-users"></span> Users</a>-->
             <a href="index.php"><span class="fa fa-sign-out-alt"></span> Logout</a>

            </div>

            <div class="body2" id="body3">

            </div>

        </div>

    </div>

<script src="Resourses/javascript/jquery.js"></script>
    
</body>
</html>