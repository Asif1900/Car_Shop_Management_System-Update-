<?php
session_start();

if(isset($_POST['submit']))
{

$id = $_POST['id'];
$name =$_POST['fullname'];
$email=$_POST['email'];
$password = $_POST['password']; 
$DOB =$_POST['DOB'];  
$number =$_POST['number']; 
$gender =$_POST['gender'];
$db = mysqli_connect("localhost","root","","carshop");
$sql = "insert into customer details (Id, Name, Email, Password, Dob, Number, Gender) value('$id','$name', '$email','$password', '$DOB','$number','$gender')";
if(mysqli_query($db,$sql))
{
    mysqli_query($db,"insert into customer details login(email) value('$email')");
    $_SESSION['email'] = $email;

    header("location:View/reg1.php");

}
else
{
echo "data not insert";
}
}
?>