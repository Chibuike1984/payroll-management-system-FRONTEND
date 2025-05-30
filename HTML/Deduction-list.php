<?php
require('../PHP/Deduction_impliment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeductionPage</title>
    <link rel="stylesheet" href="Resourses/stylesheet/style5.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    
    <div class="DeductionContainer">

        <div class="DeductionForm">
            <div class="p"><p>Deduction Form</p></div>
          
        <form action="Deduction-list.php" method="POST">
           
            <hr class="hr1">
            
                <label for="DeductionName1" style="padding-left:20px;">Deduction Name</label><br>
                <input type="text" id="DeductionName1" name="deductionname" required><br>

                
                <label for="DeductionName2" style="padding-left:20px;">Description</label><br>
                <input type="text" id="DeductionName2" name="discription" required><br>
          
          
           <hr class="hr2">
           <div class="saveDelete">
            <center>
               <input type="submit" name="save" value="save" class="Save">
               <input type="submit" name="Cancel" value="Cancel" class="Cancel">
            </center>   
           </div>
        </form>
       </div>
    
    
       <div class="DeductionTable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th>#</th>
                <th>Deduction information</th>
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