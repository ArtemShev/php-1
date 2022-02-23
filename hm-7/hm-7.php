<?php
session_start();
var_dump($_SESSION);
if(isset($_COOKIE['islogged'])){
    echo 'Вы авторизовались. Hello ';
    echo $_SESSION['email'];
} else {
    header('location: /login.php');
}