<?php
error_reporting(0);
require '../01-htaccess/01-config/config.php';

if (isset($_POST['name'])) {
//    $db->query('create table users2 (
//    id int primary key auto_increment,
//    name varchar(60),
//    surname varchar(60)
//    )');
    $sql = "insert into users2 set 
        name='{$_POST['name']}',
        surname = '{$_POST['surname']}'";
    $inst = $db->query($sql); // this type of sql code can be easily injected by closing tag
                                // and writing new sql code by the user.

    if ($inst){
        echo "ADDED";
    } else
        echo "An error has accured.";
}

//sql injection protection
if (isset($_POST['name'])) {
//    Prepare: This is the step where a query template is created,
// often with placeholders, to separate the query from the data.
// It's a one-time operation.
    $ins = $db->prepare("insert into users2 set name= :name, surname= :surname");
//    Execute: This is where the prepared query is run with
// specific data, replacing the placeholders. It's the step where
// the database actually performs the query using the provided
// values. This approach enhances security and performance.
    $ins->execute([
            'name' => $_POST['name'],
            'surname' => $_POST['surname']
    ]);
    if ($inst){
        echo "ADDED";
    } else
        echo "An error has accured.";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../01-htaccess/01-public/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>SQL Injection</h1>

<form action="" method="post">
    <input placeholder="name" type="text" name="name"><br>
    <input placeholder="surname" type="text" name="password"><br>
    <button type="submit">send</button>
</form>


</body>
</html>
