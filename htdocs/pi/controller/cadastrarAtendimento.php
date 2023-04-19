<?php

require_once '../model/inicia.php';

/** COLETA AS INFOS DIGITADAS NO FORM **/
$name = isset($_POST['name']) ? $_POST['name'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$age = isset($_POST['age']) ? $_POST['age'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
$cep_uf = isset($_POST['cep_uf']) ? $_POST['cep_uf'] : null;
//$symptoms = isset($_POST['symptoms']) ? $_POST['symptoms'] : null;

/** PREENCHEU TODOS OS CAMPOS? **/
if(empty($name) || empty($cpf) || empty($phone) || empty($email) || empty($age)){
	echo "É preciso preencher todos os campos do formulário de cadastro!";
	exit;
}

require_once '../model/inclusao.php';