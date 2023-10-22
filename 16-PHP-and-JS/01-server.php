<?php
$db = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');


$operation = $_GET['operation'];

if ($operation == 'addgroup') {
    $name = $_POST['groupname'];
    $q = $db->query("insert into groups set group_name = '$name'");

    if ($q) {
        $status = 'success';
        $title = 'Operation succesful';
        $msg = 'Operation succesfully completed';
        echo json_encode([
            'status' => $status,
            'title' => $title,
            'msg' => $msg,
            'data' => [
                'id' => $db->lastInsertId(),
                'name' => $name
            ]]);
        exit();
    } else {
        $status = 'err';
        $title = 'Error';
        $msg = 'Something happened :o';
        echo json_encode([
            'status' => $status,
            'title' => $title,
            'msg' => $msg,
            ]);
        exit();
    }
}
//echo json_encode($_POST);