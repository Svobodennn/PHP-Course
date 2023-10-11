<?php

/*PHP $_GET is a PHP super global variable
which is used to collect form data after
submitting an HTML form with method = "get" .
$_GET can also collect data sent in the URL .

This is a 'superglobal', or automatic global, variable.
This simply means that it is available in all scopes throughout a script.
There is no need to do global $variable;
to access it within functions or methods.
*/

function filter($post)
{
    return
        is_array($post) ?
            array_map('filter', $post)
            :
            htmlspecialchars(trim($post));
    // strip_tags() like htmlspecialchars(),
}

$arr = array_map('filter', $_GET);

echo "<pre>";
print_r($arr);