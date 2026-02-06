<?php

$gretting = 'Hello world';

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <ul>
        <?php foreach($menu as $key => $value):?>
            <li><a href="<?= $value ?>"><?= $key ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h1>Home paged</h1>
    <p>{{ $gretting }}</p>
    <p><?= $gretting ?></p>
</body>
</html>