<?php

$connect = mysqli_connect("localhost","root","123456","agenda");
$query_select = "SELECT nome FROM agenda";
$query_select2 = "INSERT INTO `agenda` (`nome`, `telefone`) VALUES ('".$_POST['email']."', '".$_POST['senha']."')";
mysqli_query($connect,$query_select2);
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
var_dump($array);



?>


