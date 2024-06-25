<?php
include __DIR__ . "/data.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <?php foreach ($products as $object) {
            if ($object == $product) { ?>
                <div class="card">
                    <h3>
                        <?php echo get_class($product) ?>
                    </h3>
                    <h3>
                        <?php echo $object->name ?>
                    </h3>
                    <p>
                        <?php echo "€" . $object->price ?>
                    </p>
                    <img src="<?php $object->img ?>" alt="">
                    <ul>
                        <?php foreach ($object->category as $category) { ?>
                            <li>
                                <?php echo $category ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }
            ?>
            <?php if ($object == $foodProduct) { ?>
                <div class="card">
                    <h3>
                        <?php echo get_class($foodProduct) ?>
                    </h3>
                    <h3>
                        <?php echo $object->name ?>
                    </h3>
                    <p>
                        <?php echo "€" . $object->price ?>
                    </p>
                    <p>
                        <?php echo $object->weight ?>
                    </p>
                    <img src="<?php $object->img ?>" alt="">
                    <ul>
                        <?php foreach ($object->category as $category) { ?>
                            <li>
                                <?php echo $category ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if ($object == $gameProduct) { ?>
                <div class="card">
                    <h3>
                        <?php echo get_class($gameProduct) ?>
                    </h3>
                    <h3>
                        <?php echo $object->name ?>
                    </h3>
                    <p>
                        <?php echo "€" . $object->price ?>
                    </p>
                    <p>
                        <?php echo $object->material ?>
                    </p>
                    <img src="<?php $object->img ?>" alt="">
                    <ul>
                        <?php foreach ($object->category as $category) { ?>
                            <li>
                                <?php echo $category ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if ($object == $shelterProduct) { ?>
                <div class="card">
                    <h3>
                        <?php echo get_class($shelterProduct) ?>
                    </h3>
                    <h3>
                        <?php echo $object->name ?>
                    </h3>
                    <p>
                        <?php echo "€" . $object->price ?>
                    </p>
                    <p>
                        <?php echo $object->size ?>
                    </p>
                    <img src="<?php $object->img ?>" alt="">
                    <ul>
                        <?php foreach ($object->category as $category) { ?>
                            <li>
                                <?php echo $category ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>


        <?php } ?>
    </div>

</body>

</html>