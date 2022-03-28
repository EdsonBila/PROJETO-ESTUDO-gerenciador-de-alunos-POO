<?php
include("../../../Classes/Alunos.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$curso = $_POST["curso"];

$insert = new alunos($nome, $email, $telefone, $curso);

header("Location: ../../Index/index.php");
?>


