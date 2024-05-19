<?php
if(isset($_POST['login']))
{
$name =$_POST['name'];
$password =$_POST['password']; 

$db = mysqli_connect("localhost","root","","carshop");
$query = "SELECT email from customer details where Name = '$name' AND Password = '$password'";
$verify = getString($query);

if($name = $_POST['name'] && $password= $_POST['password']){
    $_SESSION['email'] = getString($query);
    $email=$_SESSION['email'];
	header("location: View/index.php");	
}
else if($verify == 'Error')
{
    print("<center>Wrong username/password!</center>");

}
else 
{
    $_SESSION['email'] = getString($query);
    $email=$_SESSION['email'];
	header("location: View/index.php");	
}
}
if (isset($_POST['reg'])){
	header("location: View/reg.php");	
}
?><?php
if(isset($_POST['login']))
{
$name =$_POST['name'];
$password =$_POST['password']; 

$db = mysqli_connect("localhost","root","","carshop");
$query = "SELECT email from customer details where Name = '$name' AND Password = '$password'";
$verify = getString($query);

if($name = $_POST['name'] && $password= $_POST['password']){
    $_SESSION['email'] = getString($query);
    $email=$_SESSION['email'];
    header("location: View/index.php");  
}
else if($verify == 'Error')
{
    print("<center>Wrong username/password!</center>");

}
else 
{
    $_SESSION['email'] = getString($query);
    $email=$_SESSION['email'];
    header("location: View/index.php");  
}
}
if (isset($_POST['reg'])){
    header("location: View/reg.php");    
}
?>