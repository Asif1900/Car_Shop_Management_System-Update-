<?php
session_start();
if(isset($_SESSION['email']))
{
    $email= $_SESSION['email'];
}
if(isset($_POST['submit']))
{
$email =$_POST['email'];
$name =$_POST['name'];
$password =$_POST['password']; 
$repassword =$_POST['repassword']; 

$db = mysqli_connect("localhost","root","","carshop");
$sql = "UPDATE customer details SET name='$name', password='$password' WHERE email='$email'";
if($password==$repassword)
{
    if(mysqli_query($db,$sql))
{

header("location:login.php");
}
else
{
echo "data not insert";
}
}
else
{
echo "Password does not match";
}
}
?>