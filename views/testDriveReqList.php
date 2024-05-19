<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location:loginPage.php");
            }
    

    require_once('../models/alldb.php');
    $res1=showtdlist();
    
?>

<html>
    <head>
        <title>Test Drive List</title>
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
        <h2>Test Drive Request List</h2>
        <form method="get" action="">
        <table border= "2" align= "center" class="show">
            <tr>
                <th>Customer ID</th> 
                <th>Name</th> 
                <th>NID Number</th>
                <th>Contact Number</th>
                <th>Car Model</th> 
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                
            </tr>
            <?php while($p=mysqli_fetch_assoc($res1)) {?>
            <tr>
                <td><?php echo $p["c_id"]?></td>
                <td><?php echo $p["c_name"]?></td>
                <td><?php echo $p["c_nid"]?></td>
                <td><?php echo $p["c_num"]?></td>
                <td><?php echo $p["c_model"]?></td>
                <td><?php echo $p["location"]?></td>
                <td><?php echo $p["date"]?></td>
                <td><?php echo $p["time"]?></td>
                
            </tr>
            <?php }?>
        </table>
        
        </form>
        <button><a href="managerDash.php">Back</a></button>
    </body>
</html>