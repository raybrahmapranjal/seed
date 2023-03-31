<?php

    session_start();

    include '../classes/Crud.php';

    $crud = new Crud();

    $oldPassword = $_GET['oldPassword'];

    // sleep(2);

    $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

    $hash = hash('sha512', $oldPassword . $salt);
    
    $userType = $_SESSION['userType'];

    $data = $crud -> Count("logo_admin", "`password` = '$hash' AND `user_type` = '$userType'");

    if ($data == 1) {

        echo "Correct";

    } else {

        echo "Not correct";

    }

?>