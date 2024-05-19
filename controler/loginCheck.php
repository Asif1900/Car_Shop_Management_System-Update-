<?php
   session_start();
   require_once('../models/alldb.php');
  

   if(isset($_POST['log']))
   {
      $u_id=$_POST['id'];
      $u_pass=$_POST['pass'];
      if(!empty($u_id) || !empty($u_pass))
      {
        $res=auth($u_id,$u_pass);
        if($res)
        {
            $_SESSION['id']=$u_id;
            header("location:../views/managerDash.php");
        }else{
            //header("location:../views/loginPage.php");
            echo "Wrong UserID or Password.";
            }
      
      }else{
        
        echo $warning1="<script> alert('Fill up every single boxes.')</script>";
        
      }
      
         
                
    
      
   }
?>