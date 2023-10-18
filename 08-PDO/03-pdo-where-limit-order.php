<?php

//WHERE
$sql = "SELECT * FROM users WHERE id < 5";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}
$sql = "SELECT * FROM users WHERE id < 5 && users.name like '%A'";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}

//ORDER BY
$sql = "SELECT * FROM users ORDER BY age ASC";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}

//LIMIT
$sql = "select * FROM users LIMIT 3,2";
$query = $db->query($sql);
if ($query->rowCount()) {
    print_r($query->fetch(PDO::FETCH_ASSOC));
}