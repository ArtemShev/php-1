<?php
if(isset($_POST['submit'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$operation = $_POST['operation'];

	if(!is_numeric($number1) || !is_numeric($number2)){
		$error_result = "Операнды должны быть числами";
	}
	else
    switch($operation){
		case 'сложить':
		    $result = $number1 + $number2;
		    break;
		case 'отнять':
		    $result = $number1 - $number2;
		    break;
		case 'умножить':
		    $result = $number1 * $number2;
		    break;
		case 'разделить':
		    if( $number2 == '0')
		    	$error_result = "На ноль делить нельзя!";
		    else
		       $result = $number1 / $number2;
		    break;
	}


    if(isset($error_result)){
    	echo "<span>Ошибка: $error_result</span>";
    }
    else {
	    echo "<span>Ответ: $result</span>";
    }
}
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
	<form action='' method='post'>
		<input type="text" name="number1" placeholder="Первое число">
		<select class="operations" name="operation">
			<option value='сложить'>+</option>
			<option value='отнять'>-</option>
			<option value="умножить">*</option>
			<option value="разделить">/</option>
		</select>
		<input type="text" name="number2" placeholder="Второе число">

		<input type="submit" name="submit" value="Получить ответ">
	</form>
</body>
</html>

