<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
<?php
$item=2;
include 'header.php';
include 'footer.php';
?>
    <h2>Добро пожаловать, <span><?php echo $_SESSION["session_username"];?>! </span></h2>
</body>
</html>