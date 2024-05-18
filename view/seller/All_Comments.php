<?php


//include_once '../../Navigation_Links.php';

global $routes, $backend_routes, $image_routes;
require '../../routes.php';

//echo '<h1>'.login_page().'</h1>'
session_start();

$Dashboard_page = $routes['seller_dashboard'];
$logout_controller = $backend_routes['logout_controller'];
$Login_page = $routes['login'];
$user_icon = $image_routes['user_icon'];

$Add_cars_page = $routes['seller_add_cars'];
$New_cars_List_page = $routes['seller_new_cars'];
$Sold_cars_List_page = $routes['seller_sold_car'];
$Used_cars_List_page = $routes['seller_used_cars'];
$Rented_cars_List_page = $routes['seller_rented_cars'];
$All_cars_List_page =  $routes['seller_all_cars'];
$Customer_Requests_List_page = $routes['seller_car_requests'];


$All_Comments_List = $routes['seller_all_comments'];
$New_Cars_Used_controller_file = $backend_routes['seller_new_cars_used_controller'];
$Cars_View_page = $routes['seller_view_car'];
$user_id = $_SESSION['user_id'];



if($_SESSION["user_id"] <= 0){
    echo '<h1>'.$_SESSION["user_id"] .'</h1>';
    header("Location: {$Login_page}");
}



?>



    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car - Dealers -> Used Cars</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/dashboard_dropdown.css">
    <link rel="stylesheet" href="../css/health_card.css">

    <style>

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            background: #eeeded;
        }

        /* Style for the drawer */
        .drawer {
            height: 100%;
            width: 250px; /* Adjust the width as needed */
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #e6ebe4; /* Change the background color as needed */
            padding-top: 60px; /* Adjust padding to avoid overlapping with the navbar */
            transition: 0.5s;
            margin-top: 59px;
        }

        .drawer a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #000; /* Change the text color as needed */
            display: block;
            transition: 0.3s;
        }

        .drawer a:hover {
            background-color: #ddd; /* Change the background color on hover */
        }

        :root, [data-bs-theme="light"] {
            @media (min-width: 768px) {
                .offset-md-3 {
                    margin-left: 22%;
                }
            }
        }

        .rotate-text {
            display: inline-block;
            transform: rotate(60deg);
            color: red;
        }

        /* Custom styling for the table container */

        #car-table  {
            position: sticky;
            top: 40px; /* Height of the h2 element */
            background-color: #fff; /* Background color to match the container */
            z-index: 1; /* Ensure the header stays above the content */
        }
        thead {
            /*position: sticky;*/
            top: -3px;
        }
        .table-container {
            max-height: 400px; /* Set a maximum height for the table container */
            overflow-y: auto; /* Enable vertical scrolling */
            border: 0px solid #ddd; /* Add border for a nice look */
            border-radius: 10px; /* Add border radius for rounded corners */
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
        }
        .table-container::-webkit-scrollbar {
            display: none; /* Hide scrollbar for Chrome, Safari, and Opera */
        }
        #table_name{
            position: sticky;
            margin-top: 46px;
            top: -8px;

        }



        /* Bread Crumbs CSS */






        .demo {
            background-color: rgb(168, 200, 245);
        }

        .pagination-outer {
            text-align: center;
        }

        .pagination {
            background-color: #fff;
            border-radius: 25px !important;
            overflow: hidden;
            border: none !important;
        }


        a:focus,
        a:active {
            outline: none !important;
            box-shadow: none !important;
        }

        .fa {
            font-size: 11px ;
            vertical-align: middle !important;
            color: black;
        }

        .pagination li.active .fa {
            color: #fff !important;
        }

        .pagination li a.page-link {
            color: #505050;
            background-color: transparent;
            font-size: 17px;
            font-weight: 600;
            padding: 17px 25px;
            border: none;
            transition: all 0.3s ease 0s;
        }

        .fa-home {
            transform: scale(1.4, 1.4) ;
        }

        .pagination li:last-child a.page-link {
            border: none;
        }

        .pagination li.active a.page-link,
        .pagination li a.page-link:hover,
        .pagination li.active a.page-link:hover {
            background-color: transparent;
        }

        .pagination li a.page-link:after {
            content: '';
            background-color: #42A5F5 !important;
            height: 100%;
            width: 100%;
            transform: scaleY(0);
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: all 0.3s;
        }

        .pagination li.active a.page-link:after,
        .pagination li a.page-link:hover:after,
        .pagination li.active a.page-link:hover:after {
            transform: scaleY(1);
            border-radius: 25px !important;

        }
        @media (max-width: 767px) {

            .pagination li a.page-link {
                padding: 11px 8px !important;
            }

            .fa{
                font-size: 9px !important;
            }

            li a {
                font-size: 12px !important;
            }

            .page-item+.page-item {
                padding-left: 0 !important;
            }
        }







    </style>


    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("avatarDropdown");
            dropdown.style.display = dropdown.style.display === "none" || dropdown.style.display === "" ? "block" : "none";
        }

        function toggleDrawer() {
            var drawer = document.getElementById("myDrawer");
            drawer.style.width = drawer.style.width === "250px" ? "0" : "250px";
            var content = document.getElementById("mainContent");
            content.style.marginLeft = content.style.marginLeft === "250px" ? "0" : "250px";
        }

        $(document).ready(function(){

            $('ul li a').click(function() {
                $('ul li.active').removeClass('active');
                $(this).closest('li').addClass('active');
            });

        });
    </script>


</head>
<body>


<div class="main_container">

    <div id="navbar" class="division_b">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button
                    data-mdb-collapse-init
                    class="navbar-toggler"
                    type="button"
                    data-mdb-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <img
                            src=""
                            height="15"
                            alt="Car - Dealers"
                            loading="lazy"
                        />
                    </a>
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->

                    <!-- Avatar -->
                    <div class="dropdown">
                        <a
                            data-mdb-dropdown-init
                            class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuAvatar"
                            role="button"
                            aria-expanded="false"
                            onclick="toggleDropdown()"
                        >
                            <img
                                src="<?php echo $user_icon; ?>"
                                class="rounded-circle"
                                height="25"
                                alt="Black and White Portrait of a Man"
                                loading="lazy"
                            />
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end"
                            style="margin-right: 10px; left: -117px;"
                            aria-labelledby="navbarDropdownMenuAvatar"
                            id="avatarDropdown"
                        >
                            <li>
                                <a class="dropdown-item" href="<?php echo $logout_controller; ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </div>

    <div class="division_d">
        <!-- Drawer -->
        <div id="myDrawer" class="drawer">
            <a href="<?php echo $Dashboard_page; ?>"><span class="fas fa-tachometer-alt"></span> Dashboard</a>
            <a href="<?php echo $Add_cars_page; ?>"><span class="fas fa-plus"></span><span class="fas fa-car"></span> Add Cars</a>
            <a href="<?php echo $New_cars_List_page; ?>"><span class="fas fa-car"></span><span class="fas fa-tags"></span> New Cars </a>
            <a href="<?php echo $Sold_cars_List_page; ?>"><span class="fas fa-car"></span><i class="fa-solid fa-handshake" style="margin-left: 4px;"></i></span> Sold Cars
                <!--                <span class="badge badge-danger"><span class="rotate-text">New</span></span>-->
            </a>
            <a href="<?php echo $Used_cars_List_page; ?>"><span class="fas fa-wrench"></span><span class="fas fa-car"></span> Used Cars</a>
            <a href="<?php echo $Rented_cars_List_page; ?>"><span class="fas fa-user"></span><span class="fas fa-car"></span> Rented Cars</a>
            <a href="<?php echo $All_cars_List_page; ?>"><span class="fas fa-table"></span> All Cars</a>
            <a class="bg-white" href="<?php echo $Customer_Requests_List_page; ?>"><span class="fas fa-users"></span> Customer Requests</a>
        </div>


    </div>



    <div class="division_a" style="overflow-x: auto; width: 955px; height: 476px;">
        <!--    <h1>Hello Seller</h1>-->



        <!-- Bread Crumbs -->
        <div class=" container d-flex justify-content-center">
            <ul class="pagination shadow-lg">
                <li class="page-item "><a class="page-link" href="<?php echo $Customer_Requests_List_page; ?>"><i class="fa-solid fa-bell mr-1  ml-0"></i><small>All Requests</small>  </a></li>
                <li class="page-item active"><a class="page-link" href="<?php echo $All_Comments_List; ?>"><i class="fa-regular fa-comment-dots mr-1  ml-0 "></i><small>Comments &nbsp; </small></a></li>
            </ul>
        </div>

        <div class="container table-container">
            <h2 id="table_name" style="">All Comments</h2>
            <table id="car-table" class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Comment</th>
                    <th>Comment Date</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Availability</th>
                </tr>
                </thead>
                <tbody id="car-list">
                <?php
                // Include CarRepo.php and call the function to fetch data
                include '../../model/CarRepo.php';
                include '../../model/MessageRepo.php';
                include './ColorGenerator.php';
                $rows = findAllMessagesBySellerID($user_id); // assuming $id is already defined
                if($rows != null){
                    foreach ($rows as $row) {
                        $car = findCarByID($row['car_id']);
                        // Determine color classes based on availability and status
                        if($car['availability'] === "Sold" || "Available" || "Rented"){

//                        The Status colors is getting from ColorGenerator.php file

                            $availabilityColor = '';
                            $availabilityColor = Availability_Badge_Color($car['availability']);
                            $statusColor = '';
                            $statusColor = Status_Badge_Color($car['status']);

                            // Generate table row
                            echo "<tr>";
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['message']}</td>";
                            echo "<td>{$row['date']}</td>";
                            echo "<td>{$car['brand']}</td>";
                            echo "<td>{$car['model']}</td>";
                            echo "<td><span class='badge {$availabilityColor}'>{$car['availability']}</span></td>";
                            echo "</tr>";
                        }
                    }
                }
                ?>
                </tbody>
            </table>
        </div>



    </div>

</div>

</body>
    </html><?php
