<?php
require 'config.php';
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
    <style>
        @media print {
            .noPrint {
                display: none;
            }
        }

        h1 {
            color: #f6f6;
        }
    </style>
</head>
<body style="background: #e0f7fa;">
<?php
include 'header.php';
?>
<div style="margin-top: 120px;background-color: #eeeeee; margin-left: 50px;margin-right: 50px;">
    <div class="card border-primary mb-3" style="max-width: auto;">
<!--        <div class="card-header"></div>-->
        <form method="POST" action="sendmsg.php" name="mail">
            <div class="card-body text-primary">
                <div>
                    <h5 class="card-title">NEW MESSAGE</h5>
                    <?php
                    $mymail = $_SESSION['email'];
                    $getmail_sql = "SELECT `message`,`from_mail`,`id`,`day`,`subject` FROM `mail` WHERE to_mail='$mymail'";
                    // echo $getmail_sql;
                    $result = $conn->query($getmail_sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $message = $row['message'];
                            $from = $row['from_mail'];
                            $id = $row['id'];
                            $day = $row['day'];
                            $subject = $row['subject'];

                            echo '<div class="form-floating" style="border:solid 1px black;padding-top: 5px;padding-left: 5px;padding-right: 5px;">';
                            echo '<h5 style="color: black">FROM:- ' . $from . '</h5>';
                            echo '<h6 style="color: black">Subject:- ' . $subject . '</h6>';
                            echo '<hr>';
                            echo '<p style="font-size: 16px;color: black;margin-left:8px;">MESSAGE</p>';
                            echo '<p style="font-size: 15px;color: black;margin-left:8px;">' . $message . '</p>';
                            echo '<p style="margin-left:8px;">' . $day . '</p>';
//                            echo '<a href="" class="btn btn-danger" style="margin-bottom:15px; margin-left: 8px;">Delete</a> <button onclick="window.print()" class="btn btn-success" style="margin-bottom: 15px;">Print The Mail</button>';
//                            echo '<button onclick="window.print()" class="btn btn-success" style="margin-bottom: 15px;">Print The Mail</button>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <a href="#" onclick="window.print()" class="btn btn-success" style="margin-top:15px;margin-bottom: 15px;">
                    Print The Mail
                </a>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>