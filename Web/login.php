<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
<?php
     include 'header.php';
     include 'footer.php';
    ?>
    <h1>Вход</h1>
    <div class="login">
        <form action="checkLogin.php" method="post" class="form" id="logform">
            <input type="text" placeholder="логин" name="login" id="">
            <input type="password" id="password-input" placeholder="Введите пароль" name="password">
	<label><input type="checkbox" class="password-checkbox"> Показать пароль</label>
            <button>Готово</button>
        </form>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"> </script>
    <script type="text/javascript">
        $('body').on('click', '.password-checkbox', function(){
	if ($(this).is(':checked')){
		$('#password-input').attr('type', 'text');
	} else {
		$('#password-input').attr('type', 'password');
	}
}); 
    </script>
</body>
</html>