<?php
require('../PHP/Position_impliment.php');



$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "payroll";
$conn = mysqli_connect($host_name,$user_name,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * FROM department";
$depart = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PositionPage</title>
    <link rel="stylesheet" href="Resourses/stylesheet/style3.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    
    <div class="PositionContainer">

        <div class="PositionForm">
            <div class="p"><p>Position Form</p></div>
           
         
        <form action="Position-list.php" method="POST">
            <hr class="hr1">
                <label for="PositionName1" style="padding-left:20px;">Department</label><br>
                <select id="PositionName1" name="depart">
                    <option class="psh">--please select here--</option>
                    <?php             
                    while($row = mysqli_fetch_assoc($depart))
                    { 
                    $dp = $row["departmentname"];
                     echo "<option value='$dp'>$dp";
                     }?></option>
                </select> <br>

                <label for="PositionName2" style="padding-left:20px;">Name</label><br>
                <input type="text" id="PositionName2" name="Positionname" required><br>
          
           <hr class="hr2">
           <div class="saveDelete">
            <center>
               <input type="submit" name="save" value="save" class="Save">
               <input type="submit" name="Cancel" value="Cancel" class="Cancel">
            </center>   
           </div>
        </form>
       </div>
    
    
       <div class="PositionTable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th style="width:50px;">#</th>
                <th>Programming</th>
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