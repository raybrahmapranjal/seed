<?php

include '../classes/Crud.php';
date_default_timezone_set('Asia/Kolkata');
$crud = new Crud();

if(isset($_POST['uname'])){
	
	$user=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
    $login_date = date('Y-m-d');
	$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
    $hash = hash('sha512', $password . $salt);


	$check=$crud ->Count("logo_admin","`username`='$user'");
	if($check>0){	
		echo '<script>alert("user already exists")</script>';
		echo '<script>window.location.assign("../register.php")</script>';
		

	} else {
				
	    $data =[
                    'username' =>$user,
                    'email' =>$email,
                    'password' =>$hash,
                    'join_date' =>$login_date,
                ];
        $create = $crud -> Create($data,"logo_admin");
         if($create==true){
			$countAdmins = $crud->Count("logo_admin","1");
			if ($countAdmins>0) {
				$totalAdmin="admin".$countAdmins;
				$data = ['user_type'=>$totalAdmin];
				$update=$crud->Update("logo_admin", $data, "`username`='$user'" );
				if ($update) {
					$addColumn=$crud->ALTER_TABLE("participants","$totalAdmin varchar(20) NULL");
					
					echo '<script>alert(" user inserted successfully")</script>';
					echo '<script>window.location.assign("../adminDetails.php")</script>';
				}
			}
			

		} else{
	        echo "user insertion error";
	        header("location: adminDetails.php");
	    }
	}
}

 
?>
