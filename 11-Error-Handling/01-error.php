<div style="width: 100%; padding: 30px; margin-bottom: 10px; background: #303030; color: white">
    <p><?= $no ?> - <?= $msg ?></p>
    <p><strong>In this file: </strong><?= $file ?></p>
    <p><strong>In this line: </strong><?= $line ?></p>

    <?php

    $openFile = fopen($file, 'r');
    $count = 1;
    while ($code = fgets($openFile)) {
        if ($count++ == $line) {
            echo "<p><strong>Your code: </strong>" . $code . "</p>";
        }
    }
    ?>

</div>