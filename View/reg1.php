<?php
include 'Model/Reg1.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="img/icon.png" rel="icon" type="img/icon">
</head>
<style>
body {
  background-image: url('img/reg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
td{
    width: 300px;
    height: 50px;
}
</style>
<body>
    <div id="full">
        <div id="header"> <div id="logo">
            <h1><font color="white">Luxury Cars</font></h1>
        </div>

        <div id="nav">
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li> 
                <li><a href="about.php">About Us</a></li> 

                <?php
        if (isset($_SESSION['email'])) {
            echo '<li><a href="Controller/logout.php"><p>Logout</p></a></li>';
        } else {
            echo '<li><a href="Controller/login.php"><p>Login</p></a></li>';
        }
        ?>
            </ul>
        </div>
        
    </div>
    <?php

    ?>
    <center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div style="background:rgba(255,255,255,.5); width:70%; hight: 400px;"> 
        
            <form method="post" action="reg1.php">
            
            <fieldset>
                <table>
                    <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="email" value = "<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="name" name="name" id="name" placeholder="Your Name" required></td>
                    </tr>
                    <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="text" name="password" id="password" placeholder="Password" required></td>
                    </tr>
                    <tr>
                    <td><label for="repassword">Retype Password:</label></td>
                    <td><input type="text" name="repassword" id="repassword" placeholder="Password" required></td>
                    </tr>
                </table>
            <input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit"value="submit">
           
            
            </form>
        </fieldset>
        </center>


        </div>

    </div>

</body>
</html>