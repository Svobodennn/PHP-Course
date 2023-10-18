<?php
//SUM
$sql = 'SELECT SUM(id) FROM users';
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}

//MIN
$sql = 'SELECT MIN(id) FROM users';
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}

//MAX
$sql = 'SELECT MAX(id) FROM users';
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}

//COUNT
$sql = 'SELECT COUNT(id) FROM users';
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}

//HAVING
$sql = "SELECT COUNT(id) as total, name FROM users GROUP BY name HAVING total > 2";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}
