<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once "./PHPMailer/PHPMailer.php";
    require_once "./PHPMailer/SMTP.php";
    require_once "./PHPMailer/Exception.php";

    $mail = new PHPMailer();
 
    $mail ->isSMTP();
    $mail ->Host = "smtp.gmail.com";
    $mail ->SMTPAuth = true;
    $mail ->Username = "luong0project@gmail.com";
    $mail ->Password = "czkabforvdshkwad";
    $mail ->Port = 465;
    $mail ->SMTPSecure = "ssl";

    $mail ->isHTML(true);
    $mail ->setFrom("luong4game@gmail.com","Star Sneaker");
    $mail ->addAddress("luong4game@gmail.com");
    $mail ->Subject = "Hello";
    $mail ->Body = "xin chào ! chao xìn";

    if($mail->send())
        $response = "Email is send !";
    else
        $response = "Something wrong";
?>