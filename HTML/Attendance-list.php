<?php
require('../PHP/Attendance_impliment.php');

$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "payroll";
$conn = mysqli_connect($host_name,$user_name,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT firstname, middlename, lastname FROM employee";
$employee = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AttendancePage</title>
    <link rel="stylesheet" href="Resourses/jquery/jquery-ui-themes-1.13.2/jquery-ui-themes-1.13.2/themes/blitzer/jquery-ui.min.css">
    <script src="Resourses/jquery/jquery-3.6.3.min.js"></script>
    <script src="Resourses/jquery/jquery-ui-1.13.2/jquery-ui-1.13.2/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="Resourses/stylesheet/style7.css">
    <link rel="stylesheet" href="Resourses/stylesheet/attendanceReg.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
     <!--script>

        $(function(){
            $("#date").datepicker({
                dateFormat: "MM dd yy"
                //march 18, 2025 format
            });
        });
    </script-->

    <!--style>
        .ui-datepicker {
            background-color :#f0f0f0;
        }

        .ui-datepicker-header {
            background-color:#333;
            color:#fff;
        }

        .ui-datepicker-calender {
            border-color:#ddd;
        }

        .ui-datepicker-calender .ui-state-default {
            background-color:#fff;
            color:#333;
        }

        .ui-datepicker-calender .ui-state-active {
            background-color:#337ab7;
            color:#fff;
        }
    </style-->
</head>
<body>
    
    <div class="AttendanceContainer">

        <div class="AttendanceForm">
            <div class="p">
                <p>Attendance list</p>
                <button id="de"><span class="fa fa-plus"></span> Add Attendance</button>
            </div>
           
        <form>
           
            <hr class="hr1">
            <div class="p2">
                <div class="AttendanceDiv">
                <label for="AttendanceName" style="padding-left:20px;">Show</label>
                <select id="AttendanceName" aria-placeholder="position">
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                    <option>8</option>
                    <option>10</option>
                </select>

                <label for="AttendanceName">entries</label>
               </div>

               <div>
                <p>Search:<input type="search" id="search" ></p>
               </div>
            </div>
        
           <!-- <hr class="hr2"> -->
          </form>

          <div class="AttendanceTable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th>Date</th>
                <th>Employee No</th>
                <th>Name</th>
                <th colspan="2">Time Record</th>
                <th>Action</th>
            </tr>
            
            <tr>
                <td>March 18th 2025</td>
                <td>2020-9898</td>
                <td>peter smith</td>
                <td>
                    Programming<br>
                    Programming<br>
                    Programming<br>
                    Programming


                </td>

                <td>
                    Programming<br>
                    Programming<br>
                    Programming<br>
                    Programming


                </td>
               
                <td class="td2">
                    <div  class="edittrash">
                        <span class="fa fa-trash-alt" id="trash"></span>
                    </div>
                </td>
            </tr>


                
    

        </table>

        <div class="prevnext">
            <p>Showing 1 to 1 entries</p>
            <p><a href="">previous</a>  <button>1</button> <a href="">Next</a></p>
        </div>
       
       </div>
       </div>
       </div> 
       
       
   <div class="NewTimeRecord" id="ed">
    <div class="em"><p>New Time Record/s</p></div>
  
    <form action="" method="POST">
   
    <hr class="line1">

    <div >
        <div style="display:flex;flex-direction:row;justify-content:space-between;margin-top:5px;margin-bottom:5px;">
        <label for="empy" style="padding-left:30px;">Employee</label>
        <label for="type" style="padding-right:40px;">Type</label>
        <label for="date" style="padding-right:250px;">Date</label>
       </div>
  
       <div style="display:flex;flex-direction:row;">
            <select id="empy" name="names">
            <?php             
             while($row = mysqli_fetch_assoc($employee))
             { 
              $F = $row["firstname"];
              $L = $row["lastname"];
             echo "<option value='$F <br> $L'>$F <br> $L";
             }?></option>

           </select>
    
        <select id="type" name="type_in_out">
            <option>Time-in AM</option>
            <option>Time-out AM</option>
            <option>Time-in PM</option>
            <option>Time-out PM</option>
        </select>

        <input type="datetime-local" name="datetime_local" id="date">

        <button id="subt" name="subt">Add to list</button>

    </div>
    
    </div>

    <hr class="line3">

    <div class="ATable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th>Employee</th>
                <th>Type</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            
            <tr>
                <td>Okafor</td>
                <td>Time-in AM</td>
                <td>March 18th 2025</td>             
                <td class="td2">
                    <div  class="edittrash">
                        <span class="fa fa-trash-alt" id="trash"></span>
                    </div>
                </td>
            </tr>

            
            <tr>
                <td>Chibuike</td>
                <td>Time-out AM</td>
                <td>March 18th 2025</td>             
                <td class="td2">
                    <div  class="edittrash">
                        <span class="fa fa-trash-alt" id="trash"></span>
                    </div>
                </td>
            </tr>

            
            <tr>
                <td>Goodluck</td>
                <td>Time-in PM</td>
                <td>March 18th 2025</td>             
                <td class="td2">
                    <div  class="edittrash">
                        <span class="fa fa-trash-alt" id="trash"></span>
                    </div>
                </td>
            </tr>

            
            <tr>
                <td>OG</td>
                <td>Time-out PM</td>
                <td>March 18th 2025</td>             
                <td class="td2">
                    <div  class="edittrash">
                        <span class="fa fa-trash-alt" id="trash"></span>
                    </div>
                </td>
            </tr>



        </table>
    

   <hr class="line22">
   <div class="saveDelete">
        
       <input type="submit" name="Cancel" value="Cancel" class="Cancel">
       <input type="submit" name="save" value="Save" class="Save">
      
   </div>
</form>
</div>


<script src="Resourses/javascript/attendance.js"></script>
</body>
</html>