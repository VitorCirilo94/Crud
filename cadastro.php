<?php

<<<<<<< HEAD
$connect = mysqli_connect("localhost","root","123456","agenda");
$query_select = "SELECT nome FROM agenda";
$query_select2 = "INSERT INTO `agenda` (`nome`, `telefone`) VALUES ('".$_POST['email']."', '".$_POST['senha']."')";
mysqli_query($connect,$query_select2);
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
var_dump($array);
=======
$email = $_POST["E-mail"];
$senha = MD5($_POST)["Senha"];
$connect = mysqli_connect("localhost","root");
$db = mysqli_select_db("cadastro.sql");
$query_select = "SELECT login FROM usuarios WHERE login = "$email"";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array["E-mail"];
>>>>>>> 3032f2ddc8b288537552089bf81dc71c47b35377



?>


