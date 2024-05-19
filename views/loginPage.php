<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/styleAll.css">
    
</head>
<body>
    <table class="tab">
        <tr>
            
            <td><img src="../assets/carlogo.jpg" alt=""></td>
            
        </tr>
        <tr>
        <td><h1>Luxary Car Shop</h1></td>
        </tr>
    </table>
    

    <form method="post" action="../controler/loginCheck.php">
    <table class="login">
        <tr>
            <td><img src="../assets/login.png" height="100px" weight="100px" alt=""></td>
        </tr>
        <tr>
            <td><h1>Login</h1></td>
        </tr>
        <tr>
            <td>User ID:</td>
        </tr>
        <tr>
            <td><input type="text" name="id" value=""></td>
        </tr>
        <tr>
            <td>Password:</td>
        </tr>
        <tr>
            <td><input type="password" name="pass" value=""><br><br></td>
        </tr>
        <tr>
            <td><button name="log">LogIn</button> <button type="reset">Cancle</button></td>
        </tr>

    </table>

    
             
            
        </form>
</body>
</html>