<?php

//session_start();
function db_connect_file(){
    return '/Hospital_Management_System/model/db_connect.php';
}

function INDEX_page(){
    return '/Car_Shop_Management_System/index.php';
}

function login_page(){
    return '/Car_Shop_Management_System/view/Login.php';
}

function doctor_dashboard_page(){
    return '/Car_Shop_Management_System/view/doctor/Doctor_Dashboard.php';
}

function patient_dashboard_page(){
    return '/Car_Shop_Management_System/view/patient/Patient_Dashboard.php';
}

function doctor_signup_page(){
    return '/Car_Shop_Management_System/view/doctor/Doctor_Signup.php';
}

function patient_signup_page(){
    return '/Car_Shop_Management_System/view/patient/Seller_Signup.php';
}

function patient_book_appointment_page(){
    return '/Car_Shop_Management_System/view/patient/appointment/Patient_Book_Appointment.php';
}

function patient_my_appointment_list(){
    return '/Car_Shop_Management_System/view/patient/appointment/Patient_My_Appointment_List.php';
}

function patient_edit_appointment_page(){
    return '/Car_Shop_Management_System/view/patient/appointment/Patient_Edit_Appointment.php';
}

function patient_medical_history_list_page(){
    return '/Car_Shop_Management_System/view/patient/Patient_Medical_History_List.php';
}

function patient_prescription_list_page(){
    return '/Car_Shop_Management_System/view/patient/Patient_Prescription_List.php';
}

function patient_add_medical_history_page(){
    return '/Car_Shop_Management_System/view/patient/Patient_Add_Medical_History.php';
}

function patient_add_payment_page(){
    return '/Car_Shop_Management_System/view/patient/payment/Patient_Add_Payment.php';
}

function patient_payment_list_page(){
    return '/Car_Shop_Management_System/view/patient/payment/Patient_Payment_List.php';
}

function patient_communication_page(){
    return '/Car_Shop_Management_System/view/patient/Patient_Communication.php';
}

function signup_decider(){
    return '/Car_Shop_Management_System/view/Signup_Decider.php';
}




// Controller Links Here...

function loginController_file(){
    return '/Car_Shop_Management_System/controller/LoginController.php';
}

function logoutController_file(){
    return '/Car_Shop_Management_System/controller/LogoutController.php';
}


function doctor_SignupController_file(){
    return '/Car_Shop_Management_System/controller/doctor/Doctor_SignupController.php';
}

function patient_SignupController_file(){
    return '/Car_Shop_Management_System/controller/patient/Seller_SignupController.php';
}

function patient_book_appointmentController_file(){
    return '/Car_Shop_Management_System/controller/patient/Patient_Book_AppointmentController.php';
}


function patient_edit_appointmentController_file(){
    return '/Car_Shop_Management_System/controller/patient/Patient_Edit_AppointmentController.php';
}


function patient_cancel_appointmentController_file(){
    return '/Car_Shop_Management_System/controller/patient/Patient_Cancel_AppointmentController.php';
}

function patient_add_medical_historyController_file(){
    return '/Car_Shop_Management_System/controller/patient/Patient_Add_Medical_HistoryController.php';
}

function patient_add_paymentController_file(){
    return '/Car_Shop_Management_System/controller/patient/Patient_Add_PaymentController.php';
}

function patient_appointment_AJAX_Controller_file(){
    return '/Car_Shop_Management_System/controller/patient/Patient_Appointment_AjaxController.php';
}


// Image Links Here...


function contact_image(){
    return '/Car_Shop_Management_System/view/static/image/contact.jpg';
}

function doc_image(){
    return '/Car_Shop_Management_System/view/static/image/doc.jpg';
}

function patient_image(){
    return '/Car_Shop_Management_System/view/static/image/seller.jpg';
}

function user_icon(){
    return '/Car_Shop_Management_System/view/static/image/user.png';
}