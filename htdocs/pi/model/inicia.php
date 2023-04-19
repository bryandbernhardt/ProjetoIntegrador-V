<?php
/** CONSTANTES COM AS INFO PARA ACESSO AO BD MYSQL **/
define('DSN', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'pi-5-covid19');
define('DB_USER', 'root');
define('DB_PASS', '');
/** HABILITA MSGS DE ERRO **/
ini_set('display_errors', true);
error_reporting(E_ALL);
/** INCLUI O ARQUIVO DE FUNÇÕES **/
require_once 'funcoes.php';
?>