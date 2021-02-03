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
</head>
<body style="background: #e0f7fa;">
<?php
include 'header.php';
?>
<div style="margin-top: 120px;background-color: #eeeeee; margin-left: 50px;margin-right: 50px;">
    <div class="card border-primary mb-3" style="max-width: auto;">
        <div class="card-header">New Mail</div>
        <form method="POST" action="sendmsg.php" name="mail">
            <div class="card-body text-primary">
                <div>
                    <h5 class="card-title">NEW MESSAGE</h5>
                    <?php
                    $mymail = $_SESSION['email'];
                        $getmail_sql = "SELECT `message`,`from_mail`,`id` FROM `mail` WHERE to_mail='$mymail'";
//                        echo $getmail_sql;
                    $result = $conn->query($getmail_sql);
                    if ($result->num_rows>0){
                        while ($row = $result->fetch_assoc()){
                            $message = $row['message'];
                            $from = $row['from_mail'];
                            $id = $row['id'];

                            echo '<div class="form-floating" style="border:solid 1px black;padding-top: 5px;padding-left: 5px;padding-right: 5px;">';
                            echo '<h5 style="color: black">'.$id.'  FROM:- '.$from.'</h5>';
                            echo '<hr>';
                            echo '<p style="font-size: 18px;color: black">MESSAGE:-<br></p>';
                            echo '<p style="font-size: 16px;color: black">'.$message.'</p>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>