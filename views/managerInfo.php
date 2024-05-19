<?php
    session_start();
    if(empty($_SESSION['id'])){
    header("location:loginPage.php");
    }

    require_once('../models/alldb.php');
    $id=$_SESSION['id'];
    $showmgr=show_mgr($id);
    
?>

<html>
<head>
    <title>Personal Details</title>
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
<?php while($m=mysqli_fetch_assoc($showmgr)) {?>
<table>
    <tr>
        <td colspan = "2"><h1>Hello, <?php echo $m["mgr_name"];?> !!</h1></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $m["mgr_email"];?></td>
    </tr>
    <tr>
        <td>NID: </td>
        <td><?php echo $m["mgr_nid"];?></td>
    </tr>
    <tr>
        <td>Contact Number: </td>
        <td><?php echo $m["mgr_phone"];?></td>
    </tr>
    <tr>
        <td>Address: </td>
        <td><?php echo $m["mgr_add"];?></td>
    </tr>
</table>
<?php }?>
</body>
</html>