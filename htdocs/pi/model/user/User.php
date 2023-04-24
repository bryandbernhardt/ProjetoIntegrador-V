<?php
class User {
  // DECLARAÇÃO DE ATRIBUTO
  private $email;
  private $senha;

  // DECLARAÇÃO DE MÉTODO
  private function setEmail($email) {
    $this->email = $email;
  }

  private function setSenha($senha) {
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
    
  }

  public function verificaSenha($senha) {
    if(password_verify($senha, $this->senha)) {
      return true;
      //TODO: Método de logar no controller
    }
    return false;
  }
}