<?php
session_start();
require_once('db.php');

function view_parts_db(){
    $sql = "SELECT * FROM inventory";
    $res = mysqli_query(conn(), $sql);
    return $res;
}
?>