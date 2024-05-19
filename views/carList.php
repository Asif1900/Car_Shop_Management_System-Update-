<?php
    session_start();
    if(empty($_SESSION['id'])){
    header("location:loginPage.php");
    }

    require_once('../models/alldb.php'); 
    $show=carlist();
   

?>

<!DOCTYPE html>
<html>
<head>
    <title>Car list</title>
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

<form action="carlistS.php" method="post">
    <table>
        <tr>
            <td>Search by Model/Brand/ID: </td>
            <td><input type="text" name="search"></td>
            <td><button name="btsearch">Search</button></td>
        </tr>
    </table>
</form><br><hr><br>
 <form action="../controler/carListCheck.php" method="get">   
    <table border= "2" align= "center" class="show">
            <tr>
                <th>Car ID</th> 
                <th>Brand Name</th> 
                <th>Model</th>
                <th>Type</th>
                <th>Fuel Type</th> 
                <th>Mileage(km)</th>
                <th>Price</th>
                <th>Option</th>
            </tr>
            <?php while($s=mysqli_fetch_assoc($show)) {?>
            <tr>
                <td><?php echo $s["car_id"]?></td>
                <td><?php echo $s["car_brand"]?></td>
                <td><?php echo $s["car_model"]?></td>
                <td><?php echo $s["car_type"]?></td>
                <td><?php echo $s["car_fuel"]?></td>
                <td><?php echo $s["car_mileage"]?></td>
                <td><?php echo $s["ask_price"]?></td>
                <td>
                    <button name="sell" value= "<?php echo $s["car_id"]; ?>"> Sell </button>
                </td>
            </tr>
            <?php }?>
        </table>
        </form>





</body>
</html>