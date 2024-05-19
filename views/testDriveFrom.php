<?php
 
?>
<html>
    <head><title>Test Drive</title></head>
    <body>
        <h1>Car Shop</h1>
        <h4>Fill up the form for test drive</h4>

        <form method="get" action="../controler/testDriveFromCheck.php" >
            ID: <input type="text" name="C_ID" value=""><br><br>
            Name: <input type="text" name="C_name" value=""> <br><br>
            NID: <input type="number" name="C_NID" value=""><br><br>
            Contact Number: <input type="text" name= "C_num"><br><br>
            Car Model: <input type="text" name="car" value=""><br><br>
            Location: <select name="C_location" id="">
            <option value="">Select</option>    
            <option value="Banani">Banani</option>
            <option value="Badda">Badda</option>
            <option value="Rampura">Rampura</option>
            <option value="Uttara">Uttara</option>
            </select><br><br>
            Date: <input type="text" name="C_date" value=""><br><br>
            Time Slot: <select name="C_timeSlot" id="">
            <option value="">Select</option>    
            <option value="9am-11am">9am-11am</option>
            <option value="12pm-2pm">12pm-2pm</option>
            <option value="2pm-4pm">2pm-4pm</option>
            <option value="4pm-6pm">4pm-6pm</option>
            </select><br><br>
            <button name="req">Submit</button>
            <button type="reset">Reset</button>
            <Button><a href="customerDash.php">Back</a></Button>
            
        </form>
    </body>
</html>