<?php
include __DIR__ . "/data.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>
    <?php foreach ($products as $object) { ?>
        <div>
            <?php foreach ($object as $article) { ?>
                <h3>
                    <?php echo $object->name ?>
                </h3>
            <?php } ?>
            <?php  ?>
        </div>
    <?php } ?>

</body>

</html>