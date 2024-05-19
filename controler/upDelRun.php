<?php
session_start();
require_once('../models/alldb.php');

    if(isset($_GET['delete']))
    {
        //echo $_GET['delete'];
        $id = $_GET['delete'];
        $del_emp= empDel($id);
        header('location:../views/empShow.php');
        
    }

    
    if(isset($_GET['update']))
    {
        //echo $_GET['update'];
        $id = $_GET['update'];
        header('location: ../views/empUpdate.php?update='.$id);
        

    }

?>