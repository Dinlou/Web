<?php
if(empty($_POST))
    exit();
    $name=$_POST["fio"];
    $login=$_POST["login"];
    $email=$_POST["email"];
    $password=($_POST["password"]);
    echo $name;
    echo $password;
    include 'db.php';
    $query="INSERT INTO `users`(`name`,`login`,`email`,`password`) VALUES ('$name','$login','$email','$password')";
    $link->query($query) or die($link->error);
    $link->close;
    header ('Location: lk.php');
?>
