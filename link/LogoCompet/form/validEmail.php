<?php

    include '../new_logo/classes/Crud.php';

    $crud = new Crud();

    $check = $_GET['check'];

    $res = $crud -> Count('participants', " `email` = '$check'");

    if ($res > 0) {

        echo "Not available";

    } else {

        echo "Available";

    }

?>