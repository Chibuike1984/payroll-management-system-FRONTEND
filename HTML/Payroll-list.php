<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayrollPage</title>
    <link rel="stylesheet" href="Resourses/jquery/jquery-ui-themes-1.13.2/jquery-ui-themes-1.13.2/themes/blitzer/jquery-ui.min.css">
    <script src="Resourses/jquery/jquery-3.6.3.min.js"></script>
    <script src="Resourses/jquery/jquery-ui-1.13.2/jquery-ui-1.13.2/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="Resourses/stylesheet/style8.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="Resourses/stylesheet/payrollReg.css">
</head>
<body>
    
    <div class="PayrollContainer">

        <div class="PayrollForm">
            <div class="p">
                <p>Payroll list</p>
                <button id="de"><span class="fa fa-plus"></span> Add Payroll</button>
            </div>
          
        <form>
           
            <hr class="hr1">
            <div class="p2">
                <div class="PayrollDiv">
                <label for="PayrollName" style="padding-left:20px;">Show</label>
                <select id="PayrollName" aria-placeholder="position">
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                    <option>8</option>
                    <option>10</option>
                </select>

                <label for="PayrollName">entries</label>
               </div>

               <div>
                <p>Search:<input type="search" id="search" ></p>
               </div>
            </div>
        
           <!-- <hr class="hr2"> -->
          </form>

          <div class="PayrollTable">
        <table border="1px" cellpadding="5px" cellspacing="1px">
            
            <tr style="height: 40px;">
                <th>Ref No</th>
                <th>Date From</th>
                <th>Date To</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
    
    
            <tr>
                <td>2020-9898</td>
                <td>March 19 2025</td>
                <td>March 31 2025</td>
                <td style="width:150px;padding-left:50px;"><a class="cal">Calculated</a></td>
                <td class="td2">
                    <div  class="edittrash">
                        <span class="fa fa-edit" id="edit"></span>
                        <span class="fa fa-trash-alt" id="trash"></span>
                        <span class="fa fa-eye-slash" id="eyeslash"></span>
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
       
        
   <div class="PayrollReg" id="ed">
    <div class="pp"><p>Payroll Details</p></div>
  
<form>
   
    <hr class="hr11">
    
        <label for="date" style="padding-left:20px;">Date From :</label><br>
        <input type="date" id="Datefrom"  required><br>

        
        <label for="date" style="padding-left:20px;">Date To :</label><br>
        <input type="date" id="Dateto" required><br>

        <label for="Amount"  style="padding-left:20px;">Payroll Type</label><br>
        <input type="text" id="Amount" placeholder="Monthly || Semi-Monthly"><br>


   <hr class="hr22">
   <div class="saveDelete">
        
       <input type="submit" name="Cancel" value="Cancel" class="Cancel" id="Cancel">
       <input type="submit" name="save" value="Save" class="Save">
      
   </div>
</form>
</div>

<!-------------------------------->

   
<div class="PayrollReg" id="edd">
    <div class="em"><p>Payroll Details</p></div>
  
<form>
   
    <hr class="line1">
    <div class="info">
    <p>Employee ID : <span style="font-weight:bold;">2020-498</span></p>
    <p>Name : <span style="font-weight:bold;font-size:20px;">Wilson George</span></p>
    <p>Department : <span style="font-weight:bold;">IT Department</span></p>
    <p>Position : <span style="font-weight:bold;">Jr programming</span></p>
    </div>
    <hr class="line3">

      <!-- <div style="display: flex;flex-direction:row;"> 

    <div class="employ">
    <div class="ah4"><h4>Allowances  <span class="fa fa-plus" id="plus"></span></h4></div>
    <hr class="line1">
   </div>
   <div class="employ">
    <div class="ah4"><h4>Deduction  <span class="fa fa-plus" id="plus"></span></h4></div>
    <hr class="line1">
   </div>

     </div>
  -->

   <hr class="line2">
   <div class="saveDelete">
        
       <input type="submit" name="Cancel" value="Cancel" class="Cancel">
       <input type="submit" name="save" value="Save" class="Save">
      
   </div>
</form>
</div>



       <script src="Resourses/javascript/payroll.js"></script>
</body>
</html>