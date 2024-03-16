<?php

$email = $_POST["E-mail"]
$senha = MD5($_POST)["Senha"]
$db = mysql_select_db("cadastro.sql");
$query_select = "SELECT login FROM usuarios WHERE login = "$email"";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array["E-mail"];