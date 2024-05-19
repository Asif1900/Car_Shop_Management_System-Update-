<?php
require_once('db.php');
function auth($id,$password)
{
	$sql="select * from loings where id='$id' and password='$password'";
	$con=conn();
	$res= mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	if($row==1)
	{
		return $res;
	}
	else
	{
		return false;
	}
}



?>