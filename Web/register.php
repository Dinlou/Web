<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
<?php
     include 'header.php';
     include 'footer.php';
    ?>
    <h1>Регистрация</h1>
    <div class="register">
        <form action="registraction.php" method="post" class="form" id="regform">
            <input type="text" placeholder="ФИО" name="fio" id="">
            <input type="text" placeholder="логин" name="login" id="">
            <input type="text" placeholder="email" name="email" id="">
            <input type="password" placeholder="пароль" name="password" id="">
            <input type="password" placeholder="повторите пароль" name="password" id="">
            <label><input type="checkbox">Согласие на обработку персональных данных</label>
            <button>Готово</button>
        </form>
    </div>
</body>
</html>