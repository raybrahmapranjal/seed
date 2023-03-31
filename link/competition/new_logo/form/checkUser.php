<?php
include '../classes/Crud.php';
if(!empty($_POST["register"])) {
  $connection = new DbConfig();
  $con = $connection -> connect();
  $user=$_POST['uname'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];

  $dataExists=$crud->Read("logo_admin" , "`username`='$user' or `email`='$email'");
     if ($dataExists>0){
    echo "<span style='color:red'> Sorry User already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green'> User available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>