<?php
function conecta_bd(){
	try {
		$PDO = new PDO('mysql:host=' . DB_HOST. ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		return $PDO;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
?>