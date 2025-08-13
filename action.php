<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST['name'];
    $color = $_POST['color'];

    if (isset($name) && !empty($name) &&
        isset($color) && !empty($color)) {
        
         header('Location: result.php?' . $name . '+' . $color, true, 303);
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