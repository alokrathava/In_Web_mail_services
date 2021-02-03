<?php
require 'config.php';
session_start();
//    Data Fetch
$to = $_POST['to_email'];
$from = $_POST['from_email'];
$subject = $_POST['subject'];
$message = $_POST['msg'];

//    echo $to,$from,$subject,$message;
//    Query
$insert_mail_sql = "INSERT INTO `mail` (`to_mail`,`from_mail`,`subject`,`message`) VALUES ('$to','$from','$subject','$message')";
//    echo $insert_mail_sql;
$result = $conn->query($insert_mail_sql);
if ($result) {
    echo '<script>alert("Mail Send")</script>';
    echo '<script>window.location.href="index.php"</script>';
} else {
    echo '<script>alert("Error in sending mail")</script>';
    echo '<script>window.location.href="index.php"</script>';
}


?>