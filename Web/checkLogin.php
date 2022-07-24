<?php
session_start();
include 'db.php';
if (!empty($_POST))
    $login = $_POST["login"];
    $password=$_POST["password"];
    $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
    $result = $link ->query($query);
    echo ($link->affected_rows);
if($result->fetch_row())
{
$_SESSION["session_username"]=$login;
$new_url = 'index.php';
}
else
$new_url = 'lk.php';
header('Location: '.$new_url);

?>

