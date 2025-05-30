<?php
require('../PHP/Allowance_impliment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllowancePage</title>
    <link rel="stylesheet" href="Resourses/stylesheet/style4.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    
    <div class="AllowanceContainer">

        <div class="AllowanceForm">
            <div class="p"><p>Allowance Form</p></div>
           
        <form action="Allowance-list.php" method="POST">
           
            <hr class="hr1">
            
                <label for="AllowanceName1" style="padding-left:20px;">Allowance</label><br>
                <input type="text" id="AllowanceName1" name="allowancename" required><br>

                
                <label for="AllowanceName2" style="padding-left:20px;">Description</label><br>
                <input type="text" id="AllowanceName2"  name="discription" required><br>
          
          
           <hr class="hr2">
           <div class="saveDelete">
            <center>
               <input type="submit" name="save" value="save" class="Save">
               <input type="submit" name="Cancel" value="Cancel" class="Cancel">
            </center>   
           </div>
        </form>
       </div>
    
    
       <div class="AllowanceTable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th>#</th>
                <th>Allowance information</th>
                <th style="width: 200px;">Action</th>
            </tr>
  
            <?php
             $reset->getAllData();
            ?>
        </table>
    
       </div>
    
    </div>
        
</body>
</html>