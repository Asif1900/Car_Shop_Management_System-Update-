<?php
session_start();
require_once('../Models/partsdb.php');

function parts_view(){
    return view_parts_db();
    
}
?>