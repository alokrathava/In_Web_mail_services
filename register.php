<?php
require 'config.php';
session_start();
if (isset($_SESSION['id'])) {
    echo '<script>window.location.href="index.php";</script>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Email</title>
</head>
<body style="background-color: #e0f7fa">
<div style="margin:100px;width: 45%;">
    <h3 class="h1">Register Email Services</h3>
    <hr>
    <form method="post" action="register_process.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                   placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                   placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success btn-lg">Register</button>
        <a href="login.php" class="btn btn-danger btn-lg">Login</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>