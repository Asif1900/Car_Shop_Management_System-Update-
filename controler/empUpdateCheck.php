<?php
require_once('../models/alldb.php');

if (isset($_POST['up']))
{
   $id = $_POST['emp_id'];
   $empName = $_POST['emp_name'];
   $empType = $_POST['emp_type'];
   $empShift = $_POST['emp_shift'];
   $empAdd = $_POST['emp_add'];
   $empPhone = $_POST['emp_phone'];
   $empNid = $_POST['emp_nid'];
   $empSal = $_POST['emp_sal'];

   if(!empty($empId) || !empty($empName) || !empty($empType) || !empty($empShift) || !empty($empAdd) || !empty($empPhone) || !empty($empNid) || !empty($empSal) || !empty($empJoin))
    {
        $edit = empedit($id, $empName, $empType, $empShift, $empAdd, $empPhone, $empNid, $empSal);
        header("location: ../views/empShow.php");

        if($insert)
        {
           echo "Data inserted";
        }else{
           echo "Error...";
        }
        
    }else{
        echo $box="<script> alert('Fill up every single boxes.')</script>" ;
   }

   
}
 
?>
?>