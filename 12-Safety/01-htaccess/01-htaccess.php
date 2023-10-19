<?php
require '01-config/config.inc'; // can be accessed via the adress bar

if (isset($db)) {
    $q = $db->query('Select * from users');
}
$users = $q->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="01-public/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>htaccess</h1>
    <pre>
        <?php print_r($users); ?>
    </pre>
</body>
</html>
