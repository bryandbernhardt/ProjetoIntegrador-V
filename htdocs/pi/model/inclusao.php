<?php

/** INSERE AS INFOS NO BD **/
$PDO = conecta_bd();
$sql = "
INSERT INTO paciente(telefone,idade,sexo,CEP_UF,CPF,nome_completo) 
VALUES(:phone,:age,:sexo,:cep_uf,:cpf,:name)";

$stmt = $PDO->prepare($sql);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':age', $age);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':cep_uf', $cep_uf);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':name', $name);
//$stmt->bindParam(':symptoms', $symptoms);

if($stmt->execute()) {
	header('Location: ../view/index.php');
} else {
	echo "Ocorreu um erro na inclusão do registro";
	print_r($stmt->errorInfo());
}