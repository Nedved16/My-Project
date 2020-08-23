<?php
    $welcome = 'Ви новий кроистувач';

    if (!empty($_COOKIE['userName'])) {
        $welcome = $_COOKIE['userName'];
    }

//    header('Location: http://localhost');

    if (isset($_POST['name']) && $_POST['name']) {
        $name = trim(strip_tags($_POST['name']));
        setcookie('userName', $name, time()+30);
        $welcome = $name;
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    Hello!!! test;
    <?php
        echo $welcome;
    ?>
</h1>

<form action="" method="post">
    <label for="name-id">Name</label>
    <input id="name-id" type="text" name="name">
    <label for="age-id">Age</label>
    <input id="age-id" type="text" name="age">
    <input type="submit" value="SEND">
</form>


</body>
</html>

