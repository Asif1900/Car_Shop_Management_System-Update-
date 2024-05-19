<?php
session_start();
    
    if(isset($_GET['sell']))
    {
        //echo $_GET['sell'];
        $id = $_GET['sell'];
        header('location: ../views/carSell.php?car_id='.$id);
        

    }

?>