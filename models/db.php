<?php 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="db_car_shop";
    
    function getConnection(){
        global $servername;
        global $username;
        global $password;
        global $dbname;

        return $conn= new mysqli($servername,$username,$password,$dbname,3308);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
    }

?>