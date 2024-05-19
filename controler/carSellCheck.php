<?php
session_start();
require_once('../models/alldb.php');

if (isset($_POST['sell']))
{
   $selldate = $_POST['sell_date'];
   $carid = $_POST['car_id'];  
   $brand = $_POST['car_brand'];
   $carmodel = $_POST['car_model'];
   $cartype = $_POST['car_type'];
   $carfuel = $_POST['car_fuel'];
   $mileage = $_POST['car_mileage'];
   $cusid = $_POST['s_id'];
   $cusname = $_POST['c_name'];
   $cusphone = $_POST['c_phone'];
   $cusnid = $_POST['c_nid'];
   $dprice = $_POST['d_price'];
   $sellprice = $_POST['sell_price'];

   if(!empty($selldate) || !empty($carid) || !empty($brand) || !empty($carmodel) || !empty($cartype) || !empty($carfuel) || !empty($mileage) || !empty($cusid) || !empty($cusname) || !empty($cusphone)|| !empty($cusnid)|| !empty($dprice) || !empty($sellprice))
    {
      $sell= sellCar($selldate, $carid, $brand, $carmodel, $cartype, $carfuel, $mileage, $cusid, $cusname, $cusphone, $cusnid, $dprice, $sellprice);
      if($sell)
      {
         
        echo $db1="<script> alert('Data Inserted. Sell Done')</script>";
        header('location:../views/carlist.php');

      }else{
         echo $db2="<script> alert('Error...')</script>";
      }
       
    }else{
      
      echo $sellCheck="<script> alert('Fill up every single boxes. You miss somthing')</script>";
   }

   
}

 
?>