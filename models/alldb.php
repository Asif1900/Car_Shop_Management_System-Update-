<?php 

require_once('db.php');

function auth($u_id,$u_pass)
{
    $sql_log="select * from manager where mgr_id='$u_id' and mgr_pass='$u_pass'";
    $conn=getConnection();
    $res= mysqli_query($conn,$sql_log);
    $row=mysqli_num_rows($res);
    if($row==1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function insertion($empId, $empName, $empType, $empShift, $empAdd, $empPhone, $empNid, $empSal)
    {
        
        $sql_in= "insert into employee 
        (emp_id, emp_type, emp_shift, emp_name, emp_add, emp_phone, emp_nid, emp_sal)
         values 
         ('$empId', '$empType', '$empShift','$empName','$empAdd', '$empPhone','$empNid','$empSal')";
        $conn= getConnection();
        $insert= mysqli_query($conn, $sql_in);

        return $insert;
    }
    
function showEmp()
    {
        $conn=getConnection();
        $sql_show = "SELECT * FROM employee";
        $show=mysqli_query($conn, $sql_show);

        return $show;
    }

function empDel($id)
    {
        $conn = getConnection();
        $sql_delete = "DELETE FROM employee WHERE emp_id = '$id'";
        $del=mysqli_query($conn, $sql_delete);

        return $del;
    }
function empupdate($id)
    {
        $conn=getConnection();
        $sql_id = "SELECT * FROM employee WHERE emp_id = '$id'";
        $show_id = mysqli_query($conn, $sql_id);
        
        return $show_id;
    }

function empedit($id, $empName, $empType, $empShift, $empAdd, $empPhone, $empNid, $empSal)
    {
        $sql_update= "UPDATE employee
        SET emp_type = '$empType', emp_shift = '$empShift', emp_name = '$empName', emp_add = '$empAdd', emp_phone = '$empPhone', emp_nid = '$empNid', emp_sal = '$empSal' 
        WHERE emp_id = '$id'";
        $conn= getConnection();
        $edit= mysqli_query($conn, $sql_update);

        return edit;   
    }

function tdlist($cId, $cName, $cNid, $cNum, $carM, $loc, $date, $time)
    {
        
        $sql_in_td= "insert into testdrivedata 
        (c_id, c_name, c_nid, c_num, c_model, location, date, time)
         values 
         ('$cId', '$cName', '$cNid','$cNum','$carM', '$loc','$date','$time')";
        $conn= getConnection();
        $ins= mysqli_query($conn, $sql_in_td);

        return $ins;
    }
    function showtdlist()
    {
        $conn=getConnection();
        $sql_showtd = "SELECT * FROM testdrivedata";
        $show=mysqli_query($conn, $sql_showtd);

        return $show;
    }

    function sendMassage($massage, $id)
    {
        $conn= getConnection();
        $sql_massage= "UPDATE testdrivedata
        SET m_massage = '$massage' 
        WHERE c_id = '$id'";
        $res_m=mysqli_query($conn, $sql_massage);

        return $res_m;
    }

    function carlist()
    {
        $conn=getConnection();
        $sql_show = "SELECT * FROM carinfo";
        $show=mysqli_query($conn, $sql_show);

        return $show;
    }

    function csearch($search)
    {
        $conn=getConnection();
        $sql_c = "SELECT * FROM carinfo WHERE car_id = '$search' or car_brand = '$search' or car_model = '$search' or car_type = '$search'";
        $res_c=mysqli_query($conn, $sql_c);

        return $res_c;
    }

    function selctCar($c_id)
    {
        $conn=getConnection();
        $sql_sel = "SELECT * FROM carinfo WHERE car_id = '$c_id'";
        $sel = mysqli_query($conn, $sql_sel);
        
        return $sel;
    }

    function sellCar($selldate, $carid, $brand, $carmodel, $cartype, $carfuel, $mileage, $cusid, $cusname, $cusphone, $cusnid, $dprice, $sellprice)
    {
        $sql_sell= "insert into sellinfo 
        (sell_date, car_id, car_brand, car_model, car_type, car_fuel, car_mileage, s_id, c_name, c_phone, c_nid, sell_price, d_price)
         values 
         ('$selldate','$carid', '$brand', '$carmodel','$cartype','$carfuel', '$mileage','$cusid','$cusname','$cusphone','$cusnid','$sellprice','$dprice')";
        $sql_delt="DELETE FROM carinfo WHERE emp_id = '$id'";
        $conn= getConnection();
        mysqli_query($conn, $sql_delt);
        $sell= mysqli_query($conn, $sql_sell);

        return $sell;
    }

    function showSellReport()
    {
        $conn=getConnection();
        $sql_report = "SELECT * FROM sellinfo";
        $showReport=mysqli_query($conn, $sql_report);

        return $showReport;
    }

    function show_mgr($id)
    {
        $conn=getConnection();
        $sql_m = "SELECT * FROM manager WHERE mgr_id = '$id'";
        $mgr = mysqli_query($conn, $sql_m);
        
        return $mgr;
    }
    function empsearch($search)
    {
        $conn=getConnection();
        $sql_emp = "SELECT * FROM employee WHERE emp_id = '$search' or emp_type = '$search' or emp_shift = '$search' or emp_name = '$search' or emp_add = '$search' or emp_phone = '$search' or emp_nid = '$search' or emp_sal = '$search'";
        $res_emp=mysqli_query($conn, $sql_emp);

        return $res_emp;
    }
    
?>