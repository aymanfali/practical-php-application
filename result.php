<?php

$name = 'Guest';
$color = '#000000';

// Check if 'name' and 'color' GET parameters are set.
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}

if (isset($_GET['color'])) {
    $color = $_GET['color'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Hello, <?php echo $name; ?>!</h1>
        <p>Your favorite color is:
            <span style="color: <?php echo $color; ?>;">
                <?php echo $color; ?>
            </span>
        </p>
    </div>
</body>
</html>
