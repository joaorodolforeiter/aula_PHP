<?php
session_start();
include_once("conecta_mysql.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

$resultado = "INSERT INTO aluno (nome, email, estado) VALUES ('$nome', '$email', '$estado')";
$result = mysqli_query($conn, $resultado);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
    header("Location: index.php");
}	
?>