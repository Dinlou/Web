<?php
include 'db.php';
    $id=$_GET['id'];
    $query="DELETE FROM `users` WHERE `id`= $id";
    $link->query($query);
?>