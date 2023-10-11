<?php
/*
 * Session Operations

session_start(); is used to start a session.

$_SESSION['session_key'] = 'value'; is used to assign a value
                            to a session variable.

unset($_SESSION['session_key']); is used to delete the value associated
                                 with a session key.

session_destroy(); is used to end a session.
*/

session_start();

$_SESSION['name'] = "Melih";

if (isset($_SESSION['name'])){
    echo "Hello ".$_SESSION['name'];
} else {
    echo "Please login";
}

// ### MUST START SESSION FIRST AND THEN DESTROY! ###

session_destroy();
