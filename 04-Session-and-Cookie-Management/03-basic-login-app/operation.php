<?php
session_start();
include "./function/helper.php";

$user = [
    'melihsarac' => [
        'mail' => 'melih.sarac@hotmail.com',
        'password' => '123123'
    ],
    'falafel' => [
        'mail' => 'falafel@hotmail.com',
        'password' => '321321'
    ]
];

if (get('action') == 'login') {
    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if (!post('username')) {
        $_SESSION['error'] = "Please enter your username.";
        header('Location:login.php');
        exit();
    } else if (!post('password')) {
        $_SESSION['error'] = "Please enter your password.";
        header('Location:login.php');
        exit();
    } else {
        if (array_key_exists(post('username'), $user)) {
            if ($user[post('username')]['password'] == post('password')) {

                $_SESSION['login'] = true;
                $_SESSION['mail'] = $user[post('username')]['mail'];
                header('Location:index.php');
                exit();

            } else {
                $_SESSION['error'] = "User not found.";
                header('Location:login.php');

            }
        } else {
            $_SESSION['error'] = "User not found.";
            header('Location:login.php');
            exit();
        }
    }
}
if (get('action') == 'aboutme') {

    $aboutme = htmlspecialchars(post('aboutme'));

    $result = file_put_contents('./db/' . session('username') . '.txt', $aboutme);
    if ($result) {
        header('Location:index.php?action=yay');
    } else {
        header('Location:index.php?action=nay');
    }

}
if (get('action') == 'logout') {
    session_destroy();
    session_start();
    $_SESSION['error'] = 'Succesfully Logged Out';
    header('Location:login.php');
}
if (get('action') == 'changeColor') {

    setcookie('color', get('color'),time()+86400*360);
    header('Location:'.$_SERVER['HTTP_REFERER'] ?? 'index.php'); // send back where user comes from

}
