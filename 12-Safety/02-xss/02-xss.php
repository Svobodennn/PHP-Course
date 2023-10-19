<!--
XSS, or Cross-Site Scripting, is a type of security vulnerability
in web applications. It occurs when an attacker injects malicious
scripts (usually JavaScript) into web content that is then viewed
by other users.
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../01-htaccess/01-public/style.css">
    <title>Document</title>
</head>
<body>
<h1>XSS</h1>

<form action="" method="post">
    <input type="text" name="username"><br> <!-- can put script code inside -->
    <button type="submit">send</button>
</form>
<?php
setcookie('name','Without safety');
#cookie safety
setcookie(
    'name',
    'melih',
    time()+86400,
    '/',
    'localhost',
    false,
    true //http only
 );

# htmlspecialchars
echo htmlspecialchars($_POST['username']) ?? '';
#output: &lt;script&gt;alert(&#039;XSS AtTACK&#039;)&lt;/script&gt;alert('XSS AtTACK')

#striptags
echo strip_tags($_POST['username']) ?? '' ;
#output: alert('XSS AtTACK')
?>
</body>
</html>
