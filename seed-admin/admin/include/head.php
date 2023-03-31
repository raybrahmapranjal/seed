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
   $read = $crud->Read("newsticker","1");
   $readuser = $crud->Read("abouseed","1");
   $readuser2 = $crud->Read("about_compet","1");
   $readuser2 = $crud->Read("about_compet","1");
   $readuser3 = $crud->Read("telephone","1");
   $readuser4 = $crud->Read("seedvision","1");
   $readuser5 = $crud->Read("logo_admin","1");
   $readuser6 = $crud->Read("seedmission","1");
   $readuser7 = $crud->Read("bodolandmission","1");
   $readuser8 = $crud->Read("abou_bodolandseed","1");
   $readuser10 = $crud->Read("programsprojects","1");
   $readuser11 = $crud->Read("seedspotlight","1");
   $readuser12 = $crud->Read("events","1");
   $readuser13 = $crud->Read("press","1");
   $readuser14 = $crud->Read("photos","1");
   $readuser15 = $crud->Read("recentposts","1");
   $readuser16 = $crud->Read("who","1");
   $readuser17 = $crud->Read("background","1");
   $readuser18 = $crud->Read("strategy","1");
   $readuser19 = $crud->Read("tenders","1");
   $readuser20 = $crud->Read("announcements","1");
   $readuser21 = $crud->Read("schemes","1");
   $readuser22 = $crud->Read("honourable","1");
   
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>SEED| ADMIN</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!-- Data Tables -->
	 <link rel="stylesheet" href="../datatable/css/bootstrap.min.css">
    <link rel="stylesheet" href="../datatable/css/datatables.min.css">
    <link rel="stylesheet" href="../datatable/css/style.css">

    <!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!--bootstrap -->

	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<!-- login style -->
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/css/pages/login.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
		<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 



	<link rel="shortcut icon" href="img/seed1.png" />
</head>
