<?php

// DB Connection
try {
    $host = 'localhost';
    $dbname = 'testdb';
    $username = 'root';
    $password = '';

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db->query('USE your');
    $db->query("SET CHARACTER SET utf8mb4");
    $db->query("SET CHARACTER_SET_CONNECTION=utf8mb4");
    $db->query("SET @@lc_time_names = 'tr_TR'");

} catch ( PDOException $e ){
    print $e->getMessage();
}


//PDO CRUD
//CREATE

echo "<pre>";
// INSERT A SINGLE DATA
$sql = "INSERT INTO users SET name = 'Melih Saraç', grup = 'A,B,C'";
$query = $db->query($sql);
if ($query->rowCount()) {
    echo $query->rowCount() . ' data entry added';
    echo "<hr>";
}

// INSERT MULTIPLE DATA
$sql = "INSERT INTO users (name, grup) VALUES ('Mammed', 'A,D'), ('Mahluk', 'D'), ('Svoboden', 'F')";

$query = $db->query($sql);

if ($query->rowCount()) {
    echo $query->rowCount() . ' data entries added';
    echo "<hr>";

}

//UPDATE
$sql = "UPDATE users SET name = 'Melih' WHERE id = 1";
$query = $db->query($sql);
if ($query->rowCount()) {
    echo $query->rowCount() . ' data entry updated';
        echo "<hr>";

}

//READ
$sql = "SELECT * FROM users";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
        echo "<hr>";

}

$sql = "SELECT * FROM users WHERE id = 1";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
        echo "<hr>";

}

//DELETE
$sql = "DELETE FROM users WHERE id > 10";
$query = $db->query($sql);
if ($query->rowCount()) {
    echo $query->rowCount() . ' rows deleted.';
        echo "<hr>";

}

//PREPARE
$query = $db->prepare("INSERT INTO users SET name = ?, grup = ?");
$insert = $query->execute(["Mammed", "A,B,C"]);
if ($insert) {
    echo $db->lastInsertId();
    echo ' ' . $query->rowCount() . " rows affected!";
        echo "<hr>";

}