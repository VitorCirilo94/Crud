<?php
$email = $_POST["E-mail"];
$acessar = $_POST["Acessar"];
$senha = md5($_POST["Senha"]);
$connect = mysqli_connect("Localhost","root");
$db = mysqli_select_db("cadastro.sql");

$conexão = new mysqli($email,$acessar,$senha);

  if(isset($acessar)) {
    $verifica = mysqli_query("SELECT * FROM usuario WHERE email = "$email" AND senha = "$senha"") or die("erro ao selecionar");
    if(mysqli_num_rows($verifica)<=0){
        echo"script language="javascript" type="text/javascript">
        alert("Login e/ou senha incorretos")window.location.href="email.html";>/script>";
        die();
    }
    else{
        setcookie("email",$email);
        header("location.index.php");
    }
  }
  ?>
  