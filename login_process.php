<?php
    require 'config.php';
    session_start();
//  Data Fetch
    $email = $_POST['email'];
    $password = $_POST['password'];
//  Query
    $select_sql = "SELECT * FROM `user` WHERE email='$email' AND password='$password'";
//    echo $select_sql;
    $result = $conn->query($select_sql);

    if ($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
        }
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        echo '<script>window.location.href="index.php"</script>';
    }else{
        echo '<script>window.location.href="login.php"</script>';
    }
?>