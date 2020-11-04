<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Twitter');
	$text_zaprosa_vstavit = "INSERT INTO tweets (author, post) VALUES ('" . $_GET["author"] . "','" . $_GET["twit"] . "')";
	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: index.php');
 ?>
