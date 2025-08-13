<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <p class="server-time">
        Current server time is:
        <?php
        echo date("Y-m-d H:i:s e");
        ?>
    </p>

    <h1>Favorite Color</h1>
    <form action="action.php" method="POST">
        <label for="name">User Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="color">Favorite Color:</label>
        <input type="color" id="color" name="color" value="#5224db" required>

        <button type="submit">Submit</button>
    </form>
</body>

</html>