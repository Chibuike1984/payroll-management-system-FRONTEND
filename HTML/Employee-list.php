<?php
require('../PHP/Employee_impliment.php');

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

//$sQl = "SELECT * FROM position";
$sQl = "SELECT positionname FROM position";
$position = mysqli_query($conn,$sQl);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeePage</title>
    <link rel="stylesheet" href="Resourses/jquery/jquery-ui-themes-1.13.2/jquery-ui-themes-1.13.2/themes/blitzer/jquery-ui.min.css">
    <script src="Resourses/jquery/jquery-3.6.3.min.js"></script>
    <script src="Resourses/jquery/jquery-ui-1.13.2/jquery-ui-1.13.2/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="Resourses/stylesheet/style6.css">
    <link rel="stylesheet" href="Resourses/stylesheet/employeeReg.css"> 
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
   
</head>
<body>

    <div class="EmployeeContainer">

        <div class="EmployeeForm">

            <div class="p">
                <p>Employee list</p>
                <button id="de"><span class="fa fa-plus"></span> Add Employee</button>
            </div>
        <form>
           
            <hr class="hr1">
            <div class="p2">
                <div class="EmployeeDiv">
                <label for="EmployeeName" style="padding-left:20px;">Show</label>
                <select id="EmployeeName" aria-placeholder="position">
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                    <option>8</option>
                    <option>10</option>
                </select>

                <label for="EmployeeName">entries</label>
               </div>

               <div>
                <p>Search:<input type="search" id="search" ></p>
               </div>
            </div>
        
           <!-- <hr class="hr2"> -->
          </form>

          <div class="DeductionTable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th>Employee No</th>
                <th>Fisrtname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Departmant</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
    
            <?php
            $reset->getAllData();
            ?>
        </table>

        <div class="prevnext">
            <p>Showing 1 to 1 entries</p>
            <p><a href="">previous</a>  <button>1</button> <a href="">Next</a></p>
        </div>
       
       </div>
       </div>
       <!-- <button id="de">show dialog</button>-->
     

       </div>      
            

    </div>
   
    
    <!--DIALOG REGISTRATION FORM-->

    
    <div class="EmployeeReg" id="ed">
        <div class="pp"><p>New Employee</p></div>
      
    <form action="Employee-list.php" method="POST">
       
        <hr class="hr11">
        
            <label for="FirstName" style="padding-left:20px;">FirstName</label><br>
            <input type="text" id="FirstName" name="firstname"  required><br>

            
            <label for="MiddleName" style="padding-left:20px;">MiddleName</label><br>
            <input type="text" id="MiddleName" placeholder="(MiddleName)" name="middlename" ><br>

        
            <label for="LastName" style="padding-left:20px;">LastName</label><br>
            <input type="text" id="LastName" name="lastname"  required><br>

            <label for="Department" style="padding-left:20px;">Department</label><br>
            <select id="Department" name="depart">
                <option class="psh">--please select here--</option>
                <?php             
                    while($row = mysqli_fetch_assoc($depart))
                    { 
                    $dp = $row["departmentname"];
                     echo "<option value='$dp'>$dp";
                     }?></option>

            </select>
             <br>

            <label for="Position" style="padding-left:20px;">Position</label><br>
            <select id="Position" name="posi">
                <option class="psh">--please select here--</option>
                <?php             
                    while($row = mysqli_fetch_assoc($position))
                    { 
                    $pos = $row["positionname"];
                     echo "<option value='$pos'>$pos";
                     }?></option>

            </select> <br>

            <label for="Amount"  style="padding-left:20px;">Monthly Salary</label><br>
            <input type="number" id="Amount" name="amount"><br>


       <hr class="hr22">
       <div class="saveDelete">
            
           <input type="reset" name="Cancel" value="Cancel" class="Cancel" id="Cancel">
           <input type="submit" name="save" value="Save" class="Save">
          
       </div>
    </form>
   </div>














<!--END OF DIALOG REGISTRATION FORM-->













<!-- 
   
<div class="EmployReg" id="edd">
    <div class="em"><p>Employee Details</p></div>
  
<form>
   
    <hr class="line1">
    <div class="info">
    <p>Employee ID : <span style="font-weight:bold;">2020-498</span></p>
    <p>Name : <span style="font-weight:bold;font-size:20px;">Wilson George</span></p>
    <p>Department : <span style="font-weight:bold;">IT Department</span></p>
    <p>Position : <span style="font-weight:bold;">Jr programming</span></p>
    </div>
    <hr class="line3">

      <div style="display: flex;flex-direction:row;"> 

    <div class="employ">
    <div class="ah4"><h4>Allowances  <span class="fa fa-plus" id="plus"></span></h4></div>
    <hr class="line1">
   </div>
   <div class="employ">
    <div class="ah4"><h4>Deduction  <span class="fa fa-plus" id="plus"></span></h4></div>
    <hr class="line1">
   </div>

     </div>
 

   <hr class="line2">
   <div class="saveDelete">
        
       <input type="submit" name="Can" value="Cancel" class="Cancel">
       <input type="submit" name="save" value="Save" class="Save">
      
   </div>
</form>
</div>
 -->

<script src="Resourses/javascript/employee.js"></script>
</body>
</html>