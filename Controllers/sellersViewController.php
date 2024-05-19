<?php
session_start();
require_once('../Models/db.php');

function view_all_sellers(){
    $sql = "SELECT * FROM sellers";
    $res = mysqli_query(conn(), $sql);
    return $res;
}
?>