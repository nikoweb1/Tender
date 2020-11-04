<?php
$link = mysqli_connect("localhost", "admin", "lightson100%", "emailcheck_db");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Соединение с MySQL установлено!" . PHP_EOL;
//echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	
	$checkbox1 = isset($_POST['checkbox1']) ? 1 : 0;
	$checkbox2 = isset($_POST['checkbox2']) ? 1 : 0;
	$checkbox3 = isset($_POST['checkbox3']) ? 1 : 0;
	$checkbox4 = isset($_POST['checkbox4']) ? 1 : 0;
	$checkbox5 = isset($_POST['checkbox5']) ? 1 : 0;
	$checkbox6 = isset($_POST['checkbox6']) ? 1 : 0;
	$checkbox7 = isset($_POST['checkbox7']) ? 1 : 0;
	/*
	$checkbox8 = isset($_POST['checkbox8']) ? 1 : 0;
	$checkbox9 = isset($_POST['checkbox9']) ? 1 : 0;
	$checkbox10 = isset($_POST['checkbox10']) ? 1 : 0;
	$checkbox11 = isset($_POST['checkbox11']) ? 1 : 0;
	$checkbox12 = isset($_POST['checkbox12']) ? 1 : 0;
	$checkbox13 = isset($_POST['checkbox13']) ? 1 : 0;
	$checkbox14 = isset($_POST['checkbox14']) ? 1 : 0;
	$checkbox15 = isset($_POST['checkbox15']) ? 1 : 0;
	$checkbox16 = isset($_POST['checkbox16']) ? 1 : 0;
	$checkbox17 = isset($_POST['checkbox17']) ? 1 : 0;
	$checkbox18 = isset($_POST['checkbox18']) ? 1 : 0;
	$checkbox19 = isset($_POST['checkbox19']) ? 1 : 0;
	$checkbox20 = isset($_POST['checkbox20']) ? 1 : 0;
	*/
	
	$query = "SELECT id FROM emails WHERE email='$email'";
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	if(!empty($row['id'])) {
		$query = "UPDATE emails SET checkbox1='$checkbox1', checkbox2='$checkbox2', checkbox3='$checkbox3', checkbox4='$checkbox4', checkbox5='$checkbox5', checkbox6='$checkbox6', checkbox7='$checkbox7' WHERE email='$email'";
	
		$result = mysqli_query($link, $query);
	} else {
		$query = "INSERT INTO emails (id, email, checkbox1, checkbox2, checkbox3, checkbox4, checkbox5, checkbox6, checkbox7) VALUES (0, '$email', '$checkbox1', '$checkbox2', '$checkbox3', '$checkbox4', '$checkbox5', '$checkbox6', '$checkbox7')";
		
		$result = mysqli_query($link, $query);
	}
	
	/*
	if(!empty($row['id'])) {
		$query = "UPDATE emails SET checkbox1='$checkbox1', checkbox2='$checkbox2', checkbox3='$checkbox3', checkbox4='$checkbox4', checkbox5='$checkbox5', checkbox6='$checkbox6', checkbox7='$checkbox7', checkbox8='$checkbox8', checkbox9='$checkbox9', checkbox10='$checkbox10', checkbox11='$checkbox11', checkbox12='$checkbox12', checkbox13='$checkbox13', checkbox14='$checkbox14', checkbox15='$checkbox15', checkbox16='$checkbox16', checkbox17='$checkbox17', checkbox18='$checkbox18', checkbox19='$checkbox19', checkbox20='$checkbox20' WHERE email='$email'";
	
		$result = mysqli_query($link, $query);
	} else {
		$query = "INSERT INTO emails (id, email, checkbox1, checkbox2, checkbox3, checkbox4, checkbox5, checkbox6, checkbox7, checkbox8, checkbox9, checkbox10, checkbox11, checkbox12, checkbox13, checkbox14, checkbox15, checkbox16, checkbox17, checkbox18, checkbox19, checkbox20) VALUES (0, '$email', '$checkbox1', '$checkbox2', '$checkbox3', '$checkbox4', '$checkbox5', '$checkbox6', '$checkbox7', '$checkbox8', '$checkbox9', '$checkbox10', '$checkbox11', '$checkbox12', '$checkbox13', '$checkbox14', '$checkbox15', '$checkbox16', '$checkbox17', '$checkbox18', '$checkbox19', '$checkbox20')";
		
		$result = mysqli_query($link, $query);
	}
	*/
}

mysqli_close($link);
?>