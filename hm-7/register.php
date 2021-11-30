<form method = "post" action="/register.php">
    <input type="email" name = "email"><br>
    <input type="password" name="password"><br>
    <input type="submit" name='register' value="register">
</form>
<?php
require_once 'db.php';
if (isset($_POST['email'],$_POST['password'])){
    global $DBlink;
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $query = "insert into users values (id,'".$_POST['email']."','".$password."', '','',0)";
    var_dump($query);
    mysqli_query($DBlink, $query);
    echo 'Registration success';

}
?>