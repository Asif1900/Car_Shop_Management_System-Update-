<?php
session_start();

?>

<html>
<head>
    <title> Employee </title>
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

    </table><br>
    <fieldset>
        <legend><h2>Recrute New Employee</h2></legend>
        <form method="post" action="../controler/empRegCheck.php" >
            ID: <input type="number" name="emp_id" value=""><br><br>
            Name: <input type="text" name="emp_name" value=""><br><br>
            Type: <select name="emp_type" id="">
            <option value="">Select</option>    
            <option value="Mechanic">Mechanic</option>
            <option value="Driver">Driver</option>
            <option value="Cutomer Representative">Cutomer Representative</option>
            <option value="Clenar">Clenar</option>
            </select><br><br>
            Shift: <select name="emp_shift" id=""> 
            <option value="">Select</option>    
            <option value="9am-3pm">9am-3pm</option>
            <option value="3pm-8pm">3pm-8pm</option>
            </select><br><br>
            Address: <input type="text" name="emp_add" value=""><br><br>
            Phone Number: +880 <input type="number" name="emp_phone" value=""><br><br>
            NID Number: <input type="number" name="emp_nid" value=""><br><br>
            Salary: <input type="text" name="emp_sal" value=""><br><br>
            
            <hr>
            <button name="insert"> Insert </button>
            <button type="reset">Reset</button>
            

            <button><a href="empShow.php">Employee List</a></button>
            
            
        </form>
    </fieldset>
</body>
</html>