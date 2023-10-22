<?php
/*
 * JS and PHP
Just as we can embed PHP within HTML, we can also easily use JavaScript with PHP.
With PHP, we can work on the server-side for JavaScript and JavaScript frameworks (Vue, React)
as well (using REST APIs).
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP & JS</title>
</head>
<body>

<h1><?= "Title" ?></h1>

<div v-if="added" id="app">

    <input type="text" v-model:src="group_name"> <br>
    <button type="button" @click.prevent.stop="add">Ekle</button>
    <div>
        <ul>
            <li v-for="item in added" :key="item.id">{{item.name}}</li>
        </ul>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.5.1/dist/axios.min.js"></script>
<script>
    alert('<?= 'This is written with php' ?>')
    <?= "console.log('hi')" ?>
</script>

<script src="app.js"></script>

</body>
</html>
