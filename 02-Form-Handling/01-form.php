<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="01-post.php" method="post">

    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name"> <br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname" placeholder="Surname">
    <hr>
    <label for="">Languages</label> <br>
    <label>php</label>
    <input type="checkbox" value="php" name="language[]"> <!-- INDICATE THAT IT WILL BE AN ARRAY --> <br>

    <label>nodejs</label>
    <input type="checkbox" value="nodejs" name="language[]"> <br>
    <label>js</label>
    <input type="checkbox" value="js" name="language[]"> <br>
    <button type="submit">Send</button>

</form>

</body>
</html>