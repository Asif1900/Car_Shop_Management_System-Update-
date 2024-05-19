 <?php 

function conn()
{
   $serverName="localhost";
   $userName="root";
   $pass="";
   $dbName="luxmoto";
   $conn=new mysqli($serverName,$userName,$pass,$dbName);
   return $conn;
}
 


?>