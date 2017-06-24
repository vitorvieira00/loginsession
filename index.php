<?php

//verificar se está logado

session_start();

$existe = isset($_SESSION['esta_logado']);

if($existe == false){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="social">

    <a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

    <img src="http://cultura.culturamix.com/blog/wp-content/gallery/Os-Mist%C3%A9rios-Que-Cercam-a-Mona-Lisa-2/Os-Mist%C3%A9rios-Que-Cercam-a-Mona-Lisa-5.jpg" alt="" width="200" height="200">
    <h3>Bem vindo!</h3>
</div>

</body>
</html>