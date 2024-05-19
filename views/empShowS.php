<?php
    session_start();
    if(empty($_SESSION['id'])){
        header("location:loginPage.php");
            }
    require_once('../models/alldb.php');
    $show=showEmp();

    
    if(isset($_POST['btsearch']))
        {
            $search=$_POST['search'];
            $out=empsearch($search);

        }
    
?>

<html>
    <head>
        <title>Employee Details</title>
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

        
        <h2>Employee List</h2>

        <form action="empShowS.php" method="post">
        <table>
        <tr>
            <td>Search by Name/ID/Shift/phone: </td>
            <td><input type="text" name="search"></td>
            <td><button name="btsearch">Search</button></td>
        </tr>
        </table>
        </form>
        
        <br><hr><br>

        <form method="get" action="../controler/upDelRun.php">
        <table border= "2" align= "center" class="show">
            <tr>
                <th>ID</th> 
                <th>Name</th> 
                <th>Shift</th>
                <th>Type</th>
                <th>Address</th> 
                <th>Phone</th>
                <th>NID Number</th>
                <th>Salary</th>
                <th>Options</th>
            </tr>
            <?php while($s=mysqli_fetch_assoc($out)) {?>
            <tr>
                <td><?php echo $s["emp_id"]?></td>
                <td><?php echo $s["emp_name"]?></td>
                <td><?php echo $s["emp_shift"]?></td>
                <td><?php echo $s["emp_type"]?></td>
                <td><?php echo $s["emp_add"]?></td>
                <td><?php echo $s["emp_phone"]?></td>
                <td><?php echo $s["emp_nid"]?></td>
                <td><?php echo $s["emp_sal"]?></td>
                <td>
                    <button name="update" value= "<?php echo $s["emp_id"]; ?>"> Update </button>
                    <button name= "delete" value="<?php echo $s["emp_id"]; ?>">Delete</button>
                </td>
            </tr>
            <?php }?>
        </table>
        </form>
        
    </body>
</html>