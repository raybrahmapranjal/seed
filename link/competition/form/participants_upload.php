<?php 


   include("../../../seed-admin/admin/classes/Crud.php");
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
  


if(isset($_POST['submit'])){

    extract($_POST);

    if (empty($_FILES["aboutImage"]["name"])) {

        
        $data = [

            'name' =>$username,
            'phone' =>$phone,
            'email' =>$email,

            'residence' =>$residence,
             
            'date_uploaded' =>$today,
            
        ];
        $count= $crud ->Count("participants","1");
       
        if($count<1){
            $create = $crud->Create($data,"participants");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../index.php");</script>';
            }
        } else {
            
            $create =$crud->Create($data,"participants");
       
            $_SESSION['message']= '<script>alert("Data Added!");</script>';
            echo '<script>window.location.assign("../index.php");</script>';
        }

    } else {
        $target_dir = "images/index/";
        $target_file = $target_dir . md5(time()).basename($_FILES["aboutImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["aboutImage"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 
            // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
         
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo '<script>alert("Sorry, your file was not uploaded.");</script>';
           echo '<script>window.location.assign("../index.php");</script>';
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["aboutImage"]["tmp_name"], "../".$target_file)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'name' =>$username,
                    'phone' =>$phone,
                    'email' =>$email,
                    'image' =>$target_file,
                    'residence' =>$residence,
                    'date_uploaded' =>$today
                    
                    
                ];
                $count= $crud ->Count("participants","1");
                
                if($count<1){
                    $create = $crud->Create($data,"participants");

                    if($create) {
                        $_SESSION['message']= '<script>alert("Image Uploaded!");</script>';
                        echo '<script>window.location.assign("../index.php");</script>';
                    }
                } else {
                    
                    $update =$crud->Create($data,"participants");
               
                    $_SESSION['message']= '<script>alert("Post Uploaded with Image");</script>';
                    echo '<script>window.location.assign("../index.php");</script>';
                }

            } else {
                $_SESSION['message']= "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>