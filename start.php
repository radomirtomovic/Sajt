<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($array as $key => $value): ?>
        <li>
            <a href="<?php echo $value(); ?>">
                <?php echo $key; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>

    <li></li>
    <li></li>
    <li></li>
</body>
</html>