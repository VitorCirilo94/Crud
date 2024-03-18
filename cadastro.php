<?php

$email = $_POST["E-mail"]
$senha = MD5($_POST)["Senha"]
$db = mysql_select_db("cadastro.sql");
$query_select = "SELECT login FROM usuarios WHERE login = "$email"";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array["E-mail"];

if($email == ""|| $email == null){
    echo"<script language="javascript" type"text/javascript">
    alert("O Campo E-mail deve ser preenchido")window.location.href="cadastro.html";<\scriot>";
}
else{
    if($logarray == $email){

        echo"<script language="javascript" type="text/javascript">
        alert("Esse email já existe");window.location.href="cadastro.html";</script>;
        die();
    }
else{
    $query = "INSERT INTO usuarios (email, senha) VALUES ("$email","$senha")";
    $insert = mysql_query($query,$connect);

    if($insert){
        echo"<script language="javascript" type="texte/javascript">
        alert("Usuário cadastrado com sucesso");window.location.href="email.html"</script>;
    }
    else{
        echo"<script languagem="javascript" typ="text/javascript">
        alert("Não foi possivel cadastrar esse usuário")window.location.href="cadastro.html"</script>"
    }
}

?>


