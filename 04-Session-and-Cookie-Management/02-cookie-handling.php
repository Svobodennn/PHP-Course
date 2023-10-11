<?php
/*
 * Cookie Usage

Cookies are defined using the setcookie($params...) function.
Can be manipulated and used by javascript

The function parameters are as follows:

$name: The name of the cookie. The cookie is called by this name.
$value: The value of the cookie.
$time: The duration of the cookie in seconds. If no value is provided,
       the cookie will be deleted when the browser is closed. You can
       specify the time as the current time plus the duration
       (e.g., time() + 60 for 60 seconds).
$path: Specifies the directory within the site where the cookie should be
       active. Use "/" if you want it to be active throughout the entire site.
$domain: Specifies which subdomain within the site the cookie should work on.
         If not specified, it defaults to the main domain of the site,
         affecting the entire site.
$secure: If set to true, the cookie will only be used for HTTPS connections,
         enhancing cookie security.
$http_only: If set to true, the cookie can only be accessed from the server
            and cannot be manipulated by JavaScript on the client side.
*/

                        //will last 20 seconds
setcookie(
    'name',
    'Melih',
    time()+20,
    );

setcookie(
    'color',
    '#000',
    time()+86400,
    '/',
    'localhost',
    false,
    false
    );

echo "<pre>";

print_r($_COOKIE);