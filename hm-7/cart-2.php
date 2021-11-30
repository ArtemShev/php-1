
<form method = "post" action="/cart-2.php">
    <input type="text" name = "id" placeholder="id товара"><br>
    <input type="text" name="quantity" placeholder="количество"><br>
    <input type="submit" name='add' value="добавить">
</form>
<?php
session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['quantity'] = $_POST['quantity'];
require_once 'db.php';
if (isset($_POST['id'],$_POST['quantity'])){
global $DBlink;
$query = "insert into products values ('".$_POST['id']."','".$_POST['quantity']."')";
mysqli_query($DBlink, $query);
echo '<span>Вы добавили ', $_SESSION['id'], ' в количестве ', $_SESSION['quantity'],'</span>';
}
