<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];
    if (empty($_POST['name']||$_POST["email"]||$_POST["subject"]||$_POST["message"])) {
        $_SESSION['errorMessage']= 'oops..! Please  fill all details';
        echo '<script>window.location.assign("contact.php");</script>';
        }
    else
        {
        require 'PHPMailer/src/SMTP.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/Exception.php';

        $mail = new PHPMailer();

        //smtp settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "smartbtrofficial@gmail.com";
        $mail->Password = 'mlohekfoppwhvmcr';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress('smartbtrofficial@gmail.com');
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $body;
        }


        if($mail->send()){
            $_SESSION["successMessage"]= "Your email has been sent ..thank you!";
            echo '<script>window.location.assign("contact.php");</script>';
        }
        else
        {
            $_SESSION["errorMessage"]= "Your email not sent..sorry!";
            echo '<script>window.location.assign("contact.php");</script>';
        }

    // exit(json_encode(array("status" => $status, "response" => $response)));
}

?>