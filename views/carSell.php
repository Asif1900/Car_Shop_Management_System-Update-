<?php
    session_start();
    if(empty($_SESSION['id'])){
    header("location:loginPage.php");
    }

    require_once('../models/alldb.php');
    //echo $_GET['car_id'];
    $c_id=$_GET['car_id'];
    $select_car=selctCar($c_id);
    $s=mysqli_fetch_assoc($select_car);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Car Sell from</title>
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

<fieldset>
        <legend>Sell</legend>
        <form method="post" action="../controler/carSellCheck.php" >
        
            Date: <input type="text" name="sell_date"><br><br>
            Car ID: <input type="number" name="car_id" value="<?php echo $s["car_id"]?>"><br><br>
            Brand Name: <input type="text" name="car_brand" value="<?php echo $s["car_brand"]; ?>"><br><br>
            Car Model: <input type="text" name="car_model" value="<?php echo $s["car_model"]; ?>"><br><br>
            Type: <input type="text" name="car_type" value="<?php echo $s["car_type"]; ?>"><br><br>
            Fuel Type: <input type="text" name="car_fuel" value="<?php echo $s["car_fuel"]; ?>"><br><br>
            Mileage: <input type="text" name="car_mileage" value="<?php echo $s["car_mileage"]; ?>"><br><br>
            Sell ID: <input type="number" name="s_id"><br><br>
            Customer Name: <input type="text" name="c_name"><br><br>
            Phone Number: +880 <input type="number" name="c_phone" value=""><br><br>
            NID Number: <input type="number" name="c_nid" value=""><br><br>
            db: <input type="number" name="d_price" value="<?php echo $s["d_price"]?>"><br><br>
            Price: <input type="text" name="sell_price" value="<?php echo $s["ask_price"]; ?>"><br><br>

            
            <hr>
            <button name="sell"> Sell </button>
            <button><a href="carList.php">Back</a></button>
            
        </form>
    </fieldset>






</body>
</html>