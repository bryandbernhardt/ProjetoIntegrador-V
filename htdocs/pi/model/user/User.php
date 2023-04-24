<?php
require_once 'UserData.php';

class User {
  // DECLARAÇÃO DE ATRIBUTO
  public $email;
  public $senha;
  private $senhaDesc;

  // DECLARAÇÃO DE MÉTODO
  public function setEmail($email) {
    $this->email = $email;
  }

  public function setSenha($senha) {
    $this->senhaDesc = $senha;
    $senha_criptada = password_hash($senha, PASSWORD_BCRYPT);
    $this->senha = $senha_criptada;
  }

  public function getEmail() {
    return $this->email;
  }

  public function criaUsuario($email, $senha) {
    //TODO: salvar dados no banco
    $this->setEmail($email);
    $this->setSenha($senha);
    $userData = new UserData();

    $userData->insertUsuario($this);
  }

  public function verificaLogin() {
    session_start();
    $userData = new UserData();
    $userData->getCredenciais($this);
    if(password_verify($this->senhaDesc, $this->senha)) {
      return true;
    } else {
      return false;
    }
    
  }
};