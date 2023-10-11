<?php
session_start();
include "./function/helper.php";


if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
    header('Location:login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Main Page</title>
    <style>
        body.bg-dark {
            background: #181818 !important;
        }

        button {
            position: absolute;
            bottom: 8px;
            right: 8px
        }

        form {
            position: relative;
        }
    </style>

</head>
<body class="<?= $_COOKIE['color'] ?? "bg-dark" ?>">
<div class="d-flex align-items-center justify-content-center p-4">
    <img height="250px" src="LOGO.PNG" alt="">
</div>
<div class="container d-flex align-items-center justify-content-center">
    <div class="card <?= $_COOKIE['color'] ?? "bg-dark" ?>" style="width: 18rem;">
        <div class="card-header bg-primary">
            My Profile
        </div>
        <div class="card-body">
            <h5 class="card-title text-warning"><?= session('username') ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= session('mail') ?></h6>

            <?php

            if (get('action') == 'yay') {
                echo "<div class='alert alert-success'> Yay </div>";
            } elseif (get('action') == 'nay') {
                echo "<div class='alert alert-danger'> Nay </div>";
            }

            ?>

            <form action="operation.php?action=aboutme" method="post">
                <textarea class="form-control <?= $_COOKIE['color'] ?? "bg-dark" ?> text-primary" name="aboutme"
                          id="aboutme" cols="30" rows="10">
                    <?php
                    if (file_exists('./db/' . session('username') . '.txt')) {
                        $aboutme = file_get_contents('./db/' . session('username') . '.txt');
                        echo htmlspecialchars_decode($aboutme);
                    } else {
                        $aboutme = "";
                    }
                    ?>
                </textarea>
                <button class="btn btn-sm btn-primary" type="submit">Save</button>
            </form>
            <a href="operation.php?action=logout" class="btn btn-success btn-sm mt-2 w-100">Log Out</a><br>

        </div>
        <div class="card-footer bg-info d-flex align-items-center justify-content-between">
            <a href="operation.php?action=changeColor&color=bg-light" class="btn btn-sm btn-light">Light Mode</a>
            <a href="operation.php?action=changeColor&color=bg-dark" class="btn btn-sm btn-dark">Dark Mode</a>
        </div>







    </div>
</div>
</body>
</html>