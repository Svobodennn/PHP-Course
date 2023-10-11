<?php
session_start();
include "./function/helper.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Log In</title>
    <style>
        body.bg-dark{
            background: #181818!important;
        }
    </style>
</head>
<body class="<?= $_COOKIE['color'] ?? "bg-dark" ?>">
<div class="d-flex align-items-center justify-content-center p-4">
    <img height="250px" src="LOGO.PNG" alt="">
</div>
<div  class="container d-flex align-items-center justify-content-center">
    <div class="card <?= $_COOKIE['color'] ?? "bg-dark" ?>" style="width: 18rem;">
        <div class="card-header bg-primary">
            Log In
        </div>
        <div class="card-body">
            <?php if (session('error')): ?>
         <div class="alert alert-danger"><?= session("error") ?></div>
            <?php  endif; ?>
            <form action="operation.php?action=login" method="post">
                <label for="username" class="text-success">Username</label>
                <input type="text" name="username" class="form-control" value="<?= session('username') ?? null ?>">
                <label for="password" class="text-success">Password</label>
                <input type="text" name="password" class="form-control mb-4" value="<?= session('password') ?? null ?>">
                <button class="btn btn-success mb-4 w-100">Log In</button>
            </form>
        </div>
        <div class="card-footer bg-info d-flex align-items-center justify-content-between">
            <a href="operation.php?action=changeColor&color=bg-light" class="btn btn-sm btn-light">Light Mode</a>
            <a href="operation.php?action=changeColor&color=bg-dark" class="btn btn-sm btn-dark">Dark Mode</a>
        </div>
    </div>
</div>
</body>
</html>

<?php
$_SESSION['error'] = null ;
$_SESSION['username'] = null ;
$_SESSION['passsword'] = null;
?>