<?php
session_start();
require_once('../Models/alldb.php');
$id=$_POST['id'];
$pass=$_POST['pass'];
$res=auth($id,$pass);
if(!($res)==false)
{
	$_SESSION['id']=$id;
	while($results = mysqli_fetch_assoc($res)){
		$_SESSION['name']= $results['name'];

	}
   header("location:../Views/index.php");
}
else
{
	header("location:../Views/login.php");
}
?>