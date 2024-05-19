<?php
require_once('../models/alldb.php');


if (isset($_GET['req']))
{
   
   $cId = $_GET['C_ID'];  
   $cName = $_GET['C_name'];
   $cNid = $_GET['C_NID'];
   $cNum = $_GET['C_num'];
   $carM = $_GET['car'];
   $loc = $_GET['C_location'];
   $date = $_GET['C_date'];
   $time = $_GET['C_timeSlot'];

   

   if(!empty($cId) || !empty($cName) || !empty($cNid) || !empty($cNum) || !empty($carM) || !empty($loc) || !empty($date) || !empty($time))
    {
      $tdlist= tdlist($cId, $cName, $cNid, $cNum, $carM, $loc, $date, $time);
      if($tdlist)
      {
         echo "Data Inserted.";
      }else{
         echo "Error...";
      }
       
    }else{
      
      echo "Fill up every boxes" ;
   }

   
}

 
?>