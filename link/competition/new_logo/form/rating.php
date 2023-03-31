<?php 
session_start();
error_reporting(E_ALL);

if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
   exit();
} else {
   include '../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $sessionName =  $_SESSION['this_user_username'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];
}




if(isset($_POST['submit'])){
    extract($_POST);

    if (empty($_FILES["aboutImage"]["name"])) {
        $data = [
          $userType=>$r1,
 
        ];
        $count= $crud ->Count("participants","`id`='$aboutID'");
        if($count==1){
            $update =$crud->Update("participants",$data,"`id`='$aboutID'");
       
            $_SESSION['message']= '<script>alert("Data Updated!");</script>';
            echo '<script>window.location.assign("../participant_logo.php");</script>';
        } else {
            echo '<script>alert("image not found!");</script>';
            echo '<script>window.location.assign("../participant_logo.php");</script>';
        }
    }
}
?>