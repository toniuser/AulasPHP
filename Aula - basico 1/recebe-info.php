<?php 
//HTTP - GET e POST
//Exemplo de link http://localhost/AulasPHP/Aula%20-%20basico%201/recebe-info.php?planeta=ETE&espaco=naves


//Informaçoes recebidas são comentadas no HTTP://
var_dump($_GET);
//Informações são ocultadas
var_dump($_POST);
 
 ?>


<h1><?php echo $_GET['planeta'] ?></h1>
<h1><?= $_GET['espaco'] ?></h1>
<h1><?= $_POST['planeta'] ?></h1>
<h1><?= $_POST['espaco'] ?></h1>