<?php
require('../PHP/Department_impliment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DepartmentPage</title>
    <link rel="stylesheet" href="Resourses/stylesheet/style1.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <div class="DepartmentContainer">

    <div class="DepartmentForm">
        <div class="p"><p>Department Form</p></div>
    
    <form action="Department-list.php" method="POST">   
        <hr class="hr1">
            <label for="DepartmentName" style="padding-left:20px;">Name</label><br>
            <input type="text" id="DepartmentName" name="departmentname" required><br>
       <hr class="hr2">
       <div class="saveDelete">
        <center>
           <input type="submit" name="save" value="save" class="Save">
           <input type="submit" name="Cancel" value="Cancel" class="Cancel">
        </center>   
       </div>
    </form>
   </div>


   <div class="DepartmentTable">
    
   <table border="1px" cellpadding="5px" cellspacing="1px">
    <tr style="height: 40px;">
        <th style="width: 50px;">#</th>
        <th>Department</th>
        <th style="width: 100px;">Action</th>
    </tr>
   
   <?php   
    $reset->getAllData();
   ?>

  </table>
   </div>





</div>
 
</body>
</html>