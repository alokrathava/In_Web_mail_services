<?php
    require 'config.php';
    session_start();
//    Data Fetch
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
//    Query
    $insert_sql = "INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
//    echo $insert_sql;
    $result = $conn->query($insert_sql);
    if ($result){
        echo '<script>window.location.href="login.php"</script>';
    }else{
        echo '<script>window.location.href="register.php"</script>';
    }
?>