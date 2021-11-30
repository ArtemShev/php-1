<form method = "post" action="/login.php">
    <input type="email" name = "email"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="login">
</form>
<?php
session_start();
$_SESSION['email'] = $_POST['email'];
if (isset($_POST['email'],$_POST['password'])){
    require_once 'db.php';
    global $DBlink;
    $result = mysqli_query($DBlink, "Select * from users where email ='".$_POST['email']."'");
    $result = mysqli_fetch_assoc($result);
    var_dump($result);
    if(password_verify($_POST['password'],$result['user_password'])){
        setcookie('islogged','1');
        header('location: /hm-7.php');
        die();
    } else {
        echo 'incorrect';
    }
}
?>