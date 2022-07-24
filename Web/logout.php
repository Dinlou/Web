<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
<?php
session_start();
include 'header.php';
include 'footer.php';
session_destroy();
$new_url = 'index.php';
header('Location: '.$new_url);
?>
</body>
</html>