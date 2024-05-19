<?php
session_start();
require_once('../models/alldb.php');

if (isset($_POST['insert']))
{
   $empId = $_POST['emp_id'];  
   $empName = $_POST['emp_name'];
   $empType = $_POST['emp_type'];
   $empShift = $_POST['emp_shift'];
   $empAdd = $_POST['emp_add'];
   $empPhone = $_POST['emp_phone'];
   $empNid = $_POST['emp_nid'];
   $empSal = $_POST['emp_sal'];

   if(!empty($empId) || !empty($empName) || !empty($empType) || !empty($empShift) || !empty($empAdd) || !empty($empPhone) || !empty($empNid) || !empty($empSal))
    {
      $insert= insertion($empId, $empName, $empType, $empShift, $empAdd, $empPhone, $empNid, $empSal);
      if($insert)
      {
         echo $db1="<script> alert('Data Inserted.')</script>";
      }else{
         echo $db2="<script> alert('Error...')</script>";
      }
       
    }else{
      
      echo $empCheck="<script> alert('Fill up every single boxes.')</script>";
   }

   
}

 
?>