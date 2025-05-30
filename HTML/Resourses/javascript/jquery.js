
$(document).ready(function()
{
 $("#body3").load("Home.php");
 
 $("#home").click(function(){
    $("#body3").load("Home.php");
    }); 

    $("#attendance").click(function(){
     $("#body3").load("Attendance-list.php");
    }); 

    $("#payroll").click(function(){
    $("#body3").load("Payroll-list.php");
    }); 

    $("#employee").click(function(){
    $("#body3").load("Employee-list.php");
    }); 

    $("#department").click(function(){
    $("#body3").load("Department-list.php");
    }); 

    $("#position").click(function(){
    $("#body3").load("Position-list.php");
    }); 

    $("#allowance").click(function(){
    $("#body3").load("Allowance-list.php");
    }); 

    $("#deduction").click(function(){
    $("#body3").load("Deduction-list.php");
    }); 



});