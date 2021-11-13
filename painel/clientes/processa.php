<?php
session_start();
include_once("../../../bd/conexao.php");

$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_TEXT);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);



$result_usuario = "INSERT INTO cliente (cliente, endereco, tel, email, created) VALUES ('$cliente', '$endereco', '$tel', '$email', NOW())";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
