<?php
require 'config.php';
session_start();
if (!isset($_SESSION['id'])) {
    echo '<script>window.location.href="login.php";</script>';
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
<body>
<?php
if (!isset($_SESSION['id'])) { ?>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-block bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Email</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="float: right;">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php } else { ?>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-block bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Email</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="float: right;">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                   href="index.php"><?php echo $_SESSION['name']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="message.php">Message</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

<?php }
?>


</body>
</html>