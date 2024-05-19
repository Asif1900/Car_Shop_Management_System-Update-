<?php
session_start();
require_once('../Models/db.php');
$monthly_sales=[];
function view_monthly_sales(){
    global $monthly_sales;
    $sql = "SELECT * FROM monthly_sales";
    $res = mysqli_query(conn(), $sql);
    while($result=mysqli_fetch_assoc($res)){
        array_push($monthly_sales,$result['jan']);
        array_push($monthly_sales,$result['feb']);
        array_push($monthly_sales,$result['mar']);
        array_push($monthly_sales,$result['apr']);
        array_push($monthly_sales,$result['may']);
        array_push($monthly_sales,$result['jun']);
        array_push($monthly_sales,$result['jul']);
        array_push($monthly_sales,$result['aug']);
        array_push($monthly_sales,$result['sep']);
        array_push($monthly_sales,$result['oct']);
        array_push($monthly_sales,$result['nov']);
        array_push($monthly_sales,$result['dece']);
        }
}
?>