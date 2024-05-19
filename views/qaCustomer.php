<?php
    session_start();
    if(empty($_SESSION['id'])){
    header("location:loginPage.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manager Dashbord</title>
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
            <td><h2><a href="empRegPage.php">Employee</a></h2></td>
            <td><h2><a href="managerDash.php">Customer</a></h2></td>
            <td><h2><a href="sellReport.php">Sell Report</a></h2></td>
        </tr>

    </table>

<br><br>
<h2>Q/A List</h2>




    

<div class="header"></div>


</body>
</html>