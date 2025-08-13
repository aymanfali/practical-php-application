<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST['name'];
    $color = $_POST['color'];
    $encodedColor = urlencode($color);

    if (
        isset($name) && !empty($name) &&
        isset($color) && !empty($color)
    ) {
        header('Location: result.php?name=' . $name . '&color=' . $encodedColor, true, 303);
    } else {
        header('Location: index.html');
        echo "failed ";

        exit;
    }
} else {

    header('Location: index.html');
    echo "failed request ";

    exit;
}
