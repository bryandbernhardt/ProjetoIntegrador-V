<?php

require_once '../model/inicia.php';
require_once '../model/user/User.php';

/** COLETA AS INFOS DIGITADAS NO FORM **/
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

/** PREENCHEU TODOS OS CAMPOS? **/
if(empty($email) || empty($senha)){
	echo "É preciso preencher todos os campos do formulário de cadastro!";
	exit;
}

$usuario = new User();
$usuario->criaUsuario($email, $senha);


require_once '../model/inclusao.php';