<?php

/*An associative array that by default
contains the contents of $_GET, $_POST and $_COOKIE.*/



echo "<pre>";
echo "Post => "; print_r($_POST); echo "<br>";
echo "Get => "; print_r($_GET); echo "<br>";

echo "Request => "; print_r($_REQUEST); echo "<br>";
