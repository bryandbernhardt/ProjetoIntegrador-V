<?php

class UserData {

  public function getCredenciais($user) {
    $PDO = conecta_bd();
    $sql = "SELECT * FROM login 
    WHERE email = :email";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':email', $user->email);

    if($stmt->execute()){
      if($stmt->fetchColumn()) {
        session_start();
        $_SESSION['email']=$user->email;
      }
    } else {
      echo "Ocorreu um erro na inclusão do registro";
	    print_r($stmt->errorInfo());
    }
  }

  public function insertUsuario($user) {
    $PDO = conecta_bd();
    $sql = "INSERT INTO login(email, senha)
    VALUES(:email, :senha)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':email', $user->email);
    $stmt->bindParam(':senha', $user->senha);

    if($stmt->execute()) {
      session_start();
      $_SESSION['email']=$user->email;
      $_SESSION['senha']=$user->senha;
      header('location: ../view/private/atendimentos/');
    } else {
      echo "Ocorreu um erro na inclusão do registro";
	    print_r($stmt->errorInfo());
    }
  }

  public function destroyCredenciais() {
    session_destroy();
  }
};
