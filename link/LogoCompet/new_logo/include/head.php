<?php 
session_start();
if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
   exit();
} else {
   include 'classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $sessionName =  $_SESSION['this_user_username'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];

   $readuser = $crud->Read("abouseed","1");
   $readuser2 = $crud->Read("about_compet","1");
   $readuser2 = $crud->Read("about_compet","1");
   $readuser3 = $crud->Read("telephone","1");
   $readuser4 = $crud->Read("seedvision","1");
   $readuser5 = $crud->Read("logo_admin","1");
   $readuser6 = $crud->Read("participants","1");
   $readuser6 = $crud->Read("participants","1");
   $readuser7 = $crud->Read("logo_admin","1");
  
}
?>

<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logo Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/seed1.png" />

    <!-- Data Tables -->
    <link rel="stylesheet" href="datatable/css/bootstrap.min.css">
    <link rel="stylesheet" href="datatable/css/datatables.min.css">
    <link rel="stylesheet" href="datatable/css/style.css">

     


  </head>