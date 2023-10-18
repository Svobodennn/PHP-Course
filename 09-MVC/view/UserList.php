<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>UserList</title>
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Users</h1>
        <?php foreach ($data as $key => $value): ?>
            <div class="col-md-4">
                <div class="p-5">

                    <div class="card">
                        <div class="card-header"><?= $value['name'] ?></div>
                        <div class="card-body">
                            <ul>
                                <li><?= $value['phone'] ?></li>
                                <li><?= $value['mail'] ?></li>
                                <li><?= $value['city'] ?></li>
                                <li><?= $value['grup'] ?></li>
                                <li><?= $value['post_code'] ?></li>
                                <li><?= $value['age'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

</body>
</html>