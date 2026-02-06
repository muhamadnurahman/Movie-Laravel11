<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Show</title>
</head>
<body>
    <ul>
        <?php foreach($menu as $key => $value):?>
            <li><a href="<?= $value ?>"><?= $key ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h1>Movie</h1>
    {{ dd($movie) }}
</body>
</html>