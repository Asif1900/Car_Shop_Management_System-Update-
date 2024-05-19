<?php
    session_start();
    if(empty($_SESSION['id'])){
    header("location:loginPage.php");
    }

    require_once('../models/alldb.php');
    $showr=showSellReport();
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sell Report</title>
    <link rel="stylesheet" href="../assets/styleAll.css">
</head>
<body>
    <table class="tab">
    <tr>
        <td><img src="../assets/carlogo.jpg" height="100px" weight="200px" alt=""></td>
        <td><h1>Luxary Car Shop</h1></td>
        <td><a href="managerInfo.php"><img src="../assets/login.png" height="100px" weight="80px" alt=""></a><br>
            Welcome <?php echo $_SESSION['id'];?><br>
            <button><a href="../controler/logout.php">Logout</a></button>
        </td>
        </tr>
    </table>
    <table class= "ribon">
        <tr>
            <td><h3><a href="empRegPage.php">Employee</a></h3></td>
            <td><h3><a href="managerDash.php">Customer</a></h3></td>
            <td><h3><a href="sellReport.php">Sell Report</a></h3></td>
        </tr>

    </table>
<br><br>

<h2>Sell Report</h2>
        
        <table border= "2" align= "center" class="show">
            <tr>
                <th>Sell Date</th> 
                <th>Car ID</th> 
                <th>Brand</th> 
                <th>Model Name</th>
                <th>Type</th>
                <th>Fuel Type </th> 
                <th>Mileage</th>
                <th>Sell ID</th>
                <th>Customer Name</th>
                <th>Contact Number</th>
                <th>NID Number</th>
                <th>Sell Price</th>
                <th>Deller Price</th>
                <th>Profit</th>
            </tr>
            <?php while($s=mysqli_fetch_assoc($showr)) {?>
            <tr>
                <td><?php echo $s["sell_date"]?></td>
                <td><?php echo $s["car_id"]?></td>
                <td><?php echo $s["car_brand"]?></td>
                <td><?php echo $s["car_model"]?></td>
                <td><?php echo $s["car_type"]?></td>
                <td><?php echo $s["car_fuel"]?></td>
                <td><?php echo $s["car_mileage"]?></td>
                <td><?php echo $s["s_id"]?></td>
                <td><?php echo $s["c_name"]?></td>
                <td><?php echo $s["c_phone"]?></td>
                <td><?php echo $s["c_nid"]?></td>
                <td><?php echo $s["sell_price"]?></td>
                <td><?php echo $s["d_price"]?></td>
                <td><?php echo $profit = ($s["sell_price"]) - ($s["d_price"])?></td>
            </tr>
            <?php }?>
        </table>
    




</body>
</html>